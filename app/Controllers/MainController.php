<?php

namespace App\Controllers;

use App\Inc\DB;

class MainController
{
    public function __construct(DB $db)
    {
    }

    public function test()
    {
        echo "Hello from test";
    }

    public function rahul()
    {
        echo "Hello Rahul";
    }
}