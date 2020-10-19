<?php namespace App\Blog\Home;

use App\Blog\BlogTemplate;
use App\Blog\BlogController;

class HomeController extends BlogController
{
    public function index()
    {
        $view = new BlogTemplate(\dirname(__FILE__) . '/home.html');
        $view->render();
    }
}
