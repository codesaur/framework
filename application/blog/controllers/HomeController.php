<?php namespace App\Blog\Controllers;

use App\Blog\Templates\BlogTemplate;

class HomeController extends BlogController
{
    public function index()
    {
        $view = new BlogTemplate(ololt_html . '/home.html');
        $view->render();
    }
}
