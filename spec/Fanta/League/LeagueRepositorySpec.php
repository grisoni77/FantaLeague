<?php

namespace spec\Fanta\League;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LeagueRepositorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Fanta\\League\\LeagueRepository');
    }

    function it_can_add_a_league(\Fanta\League\League $league)
    {
        $this->add($league)->shouldReturnAnInstanceOf("Fanta\\League\\League");
    }
}
