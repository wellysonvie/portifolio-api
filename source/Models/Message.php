<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Message extends DataLayer
{
    public function __construct()
    {
        parent::__construct("messages", []);
    }
}