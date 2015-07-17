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
}
