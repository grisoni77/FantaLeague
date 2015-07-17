<?php

namespace spec\Fanta\Team;

use Fanta\League\League;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TeamSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Fanta\Team\Team');
    }

    function assign_league_to_team(League $league)
    {
        $this->setLeague($league)->shouldHaveType('Fanta\Team\Team');
    }
}
