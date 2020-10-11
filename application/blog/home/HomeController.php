<?php namespace App\Blog\Home;

use App\Blog\Common\BlogTemplate;
use App\Blog\Common\BlogController;

class HomeController extends BlogController
{
    public function index()
    {
        $view = new BlogTemplate(\dirname(__FILE__) . '/home.html');
        $view->render();
    }
}
