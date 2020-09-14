<?php $autoload = require_once '../vendor/autoload.php';

/* DEVELOPMENT: v7.2020.05.25
 */

$namespaces=  array(
    '/' => 'App\\Blog\\',
    '/indo' => 'Indoraptor\\',
    '/dashboard' => 'App\\Dashboard\\'
);

$application_path = dirname(__FILE__) . '/../application';

$autoload->addPsr4('App\\Blog\\', "$application_path/blog");
$autoload->addPsr4('App\\Blog\\Templates\\', "$application_path/blog/templates");
$autoload->addPsr4('App\\Blog\\Controllers\\', "$application_path/blog/controllers");

$autoload->addPsr4('App\\Dashboard\\', "$application_path/dashboard");
$autoload->addPsr4('App\\Dashboard\\Templates\\', "$application_path/dashboard/templates");
$autoload->addPsr4('App\\Dashboard\\Controllers\\', "$application_path/dashboard/controllers");

codesaur::start(new codesaur\Generic\Application($namespaces));
