<?php

namespace Fanta\League;

class LeagueFactory
{

    public function create()
    {
        $league = new League();
        return $league;
    }
}
