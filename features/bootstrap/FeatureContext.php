<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    use TeamFeatureContext;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        //$this->useContext('team_context', new TeamFeatureContext());

        $this->leagueFactory = new \Fanta\League\LeagueFactory();
        $this->leagues = new Fanta\League\InMemoryLeagueRepository();
    }

    /**
     * @Given there is not a league called :arg1
     */
    public function thereIsNotALeagueCalled($arg1)
    {
        $league = $this->leagues->findByName($arg1);
        if ($league) {
            $league = $this->leagues->remove($league);
        }
    }

    /**
     * @When I create a league :arg1
     */
    public function iCreateALeague($arg1)
    {
        $this->leagueFactory->create()->setName($arg1);
    }


    /**
     * @Given there is a league called :arg1
     */
    public function thereIsALeagueCalled($arg1)
    {
        $league = $this->leagues->findByName($arg1);
        if (!$league) {
            $league = $this->leagueFactory->create()->setName($arg1);
            $this->leagues->add($league);
        }
    }
}
