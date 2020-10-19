<?php namespace App\Dashboard\Home;

use codesaur as single;

use App\Dashboard\DashboardController;

class HomeController extends DashboardController
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
