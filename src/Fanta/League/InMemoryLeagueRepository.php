<?php

namespace Fanta\League;

class InMemoryLeagueRepository implements LeagueRepository
{
    /**
     * @var array
     */
    private $repository;

    public function add(League $league)
    {
        $this->repo[] = $league;
        return $league;
    }

    /**
     * @param string $name
     * @return League
     */
    public function findByName($name)
    {
        // TODO: Implement findByName() method.
    }

    /**
     * @param League $league
     * @return League
     */
    public function remove(League $league)
    {
        // TODO: Implement removeLeague() method.
    }


}
