<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
trait TeamFeatureContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->teams = new InMemoryTeamRepository();
        $this->teamFactory = new TeamFactory();
    }


    /**
     * @When I create a team called :arg1
     */
    public function iCreateATeamCalled($arg1)
    {
        $team = $this->teamFactory->create()->setName($arg1);
        $this->teams->add($team);
    }

    /**
     * @Then there is a team called :arg1
     */
    public function thereIsATeamCalled($arg1)
    {
        $team = $this->teams->findByName($arg1);
        if (!$team) {
            $this->iCreateATeamCalled($arg1);
        }
    }

    /**
     * @Given team :arg1 is not assigned to any league
     */
    public function aTeamIsNotAssignedToAnyLeague($arg1)
    {
        $team = $this->teams->findByName($arg1);
        $team->setLeague(null);
    }

    /**
     * @When I assigned team :arg1 to league :arg2
     */
    public function iAssignedTeamToLeague($arg1, $arg2)
    {
        $league = $this->leagues->findByName($arg2);
        $team = $this->teams->findByName($arg1);
        $team->setLeague($league);
    }

    /**
     * @Then team :arg1 is assigned to :arg2
     */
    public function teamIsAssignedTo($arg1, $arg2)
    {
        $league = $this->leagues->findByName($arg2);
        $team = $this->teams->findByName($arg1);

    }
}