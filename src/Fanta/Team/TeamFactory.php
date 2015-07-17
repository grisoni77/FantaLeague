<?php

namespace Fanta\Team;

class TeamFactory
{
    /**
     * @return Team
     */
    public function create()
    {
        return new Team();
    }
}
