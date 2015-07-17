<?php

namespace Fanta\Team;

use Fanta\League\League;

class Team
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var League
     */
    private $league;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return League
     */
    public function getLeague()
    {
        return $this->league;
    }

    /**
     * @param League $league
     */
    public function setLeague($league)
    {
        $this->league = $league;
    }


}
