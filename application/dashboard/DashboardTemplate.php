<?php namespace App\Dashboard;

class DashboardTemplate extends \Velociraptor\Boot4\Dashboard
{
    function __construct($title = null, array $vars = [])
    {
        parent::__construct($title, $vars);
        
        $this->set('meta', array('description' => 'App Dashboard'));
    }
}
