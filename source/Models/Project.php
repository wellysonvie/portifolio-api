<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Project extends DataLayer
{
    public function __construct()
    {
        parent::__construct("projects", []);
    }
}