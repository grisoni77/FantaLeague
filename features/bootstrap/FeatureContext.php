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
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->leagues = new Fanta\League\LeagueRepository();
    }

    /**
     * @Given there is not a league called :arg1
     */
    public function thereIsNotALeagueCalled($arg1)
    {
        $league = $this->leagues->findByName($arg1);
        if ($league) {
            $this->leagues->removeLeague($league);
        }
    }

    /**
     * @When I create a league :arg1
     */
    public function iCreateALeague($arg1)
    {
        $this->leagues->createLeague()->setName($arg1);
    }


    /**
     * @Given there is a league called :arg1
     */
    public function thereIsALeagueCalled($arg1)
    {
        $league = $this->leagues->findByName($arg1);
        if (!$league) {
            $this->leagues->createLeague()->setName($arg1);
        }
    }
}
