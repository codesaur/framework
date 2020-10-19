<?php namespace App\Blog;

class Routing extends \codesaur\Http\Routing
{
    function getHomeRules() : array
    {
       return array(
           ['', 'App\\Blog\\Home\\HomeController'],
           ['/home', 'App\\Blog\\Home\\HomeController', ['name' => 'home']],
           ['/language/:language', 'changeLanguage@App\\Blog\\BlogController', ['name' => 'language', 'filters' => ['language' => '(\w+)']]]
        );
    }

    function getContentRules() : array
    {
       return array(
           ['/news', 'App\\Blog\\News\\NewsController', ['name' => 'news']],
           ['/page/:id', 'page@App\\Blog\\Page\\PageController', ['name' => 'page', 'filters' => ['id' => '(\d+)']]]
        );
    }
}
