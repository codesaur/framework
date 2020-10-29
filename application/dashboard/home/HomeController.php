<?php namespace App\Dashboard\Home;

use codesaur as single;

use Velociraptor\Boot4\Dashboard;

use App\Dashboard\DashboardController;

class HomeController extends DashboardController
{
    public function index()
    {
        if (single::user()->can(
                single::user()->organization('alias') . '_web_report')) {
            return single::redirect('web-report');
        }
        
        $dashboard = new Dashboard();
        $dashboard->render('Welcome ' . single::user()->account('first_name') . ' ' . single::user()->account('last_name'));
    }
}
