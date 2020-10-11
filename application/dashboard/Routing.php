<?php namespace App\Dashboard;

class Routing extends \Velociraptor\Routing
{
    function getHomeRules() : array
    {
        return array(
            ['', 'App\\Dashboard\\Home\\HomeController'],
            ['/home', 'App\\Dashboard\\Home\\HomeController', ['name' => 'home']]
        );
    }
}
