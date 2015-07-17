<?php

namespace Fanta\League;

interface LeagueRepository
{
    /**
     * @param League $league
     * @return League
     */
    public function add(League $league);
}
