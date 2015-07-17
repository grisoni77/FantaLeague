<?php

namespace spec\Fanta\League;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LeagueSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Fanta\League\League');
    }

    function it_can_set_the_league_name()
    {
        $this->setName("League")->shouldHaveType('Fanta\League\League');
    }
}
