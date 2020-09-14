<?php namespace App\Dashboard\Controllers;

use codesaur as single;

class HomeController extends \Velociraptor\Controllers\RaptorController
{
    public function index()
    {
        if (single::user()->can(
                single::user()->organization('alias') . '_web_report')) {
            return single::redirect('web-report');
        }
        
        return false;
    }
}
