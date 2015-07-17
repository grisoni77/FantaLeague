<?php

namespace Fanta\League;

interface LeagueRepository
{
    /**
     * @param League $league
     * @return League
     */
    public function add(League $league);

    /**
     * @param string $name
     * @return League
     */
    public function findByName($name);

    /**
     * @param League $league
     * @return League
     */
    public function remove(League $league);

}
