<?php

namespace spec\Fanta\Team;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TeamFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Fanta\\Team\\TeamFactory');
    }

    function it_can_create_a_team()
    {
        $this->create()->shouldReturnAnInstanceOf("Fanta\\Team\\Team");
    }
}