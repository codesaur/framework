<?php namespace App\Dashboard;

class Routing extends \Velociraptor\Routing
{
    function getHomeRules() : array
    {
        return array(
            ['', 'HomeController'],
            ['/home', 'HomeController', ['name' => 'home']]
        );
    }
}
