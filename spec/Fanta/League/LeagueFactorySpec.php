<?php

namespace spec\Fanta\League;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LeagueFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Fanta\\League\\LeagueFactory');
    }

    function it_can_create_a_league()
    {
        $this->create()->shouldReturnAnInstanceOf("Fanta\\League\\League");
    }
}
