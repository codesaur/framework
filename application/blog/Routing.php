<?php namespace App\Blog;

class Routing extends \codesaur\Http\Routing
{
    function getHomeRules() : array
    {
       return array(
           ['', 'HomeController'],
           ['/home', 'HomeController', ['name' => 'home']],
           ['/language/:language', 'changeLanguage@BlogController', ['name' => 'language', 'filters' => ['language' => '(\w+)']]]
        );
    }

    function getPageRules() : array
    {
       return array(
           ['/news', 'news@PageController', ['name' => 'news']],

           ['/page/:id', 'page@PageController', ['name' => 'page', 'filters' => ['id' => '(\d+)']]]
        );
    }
}
