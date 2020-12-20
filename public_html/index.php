<?php $autoload = require_once '../vendor/autoload.php';

/* DEVELOPMENT: v7.2020.05.25
 */

$app_namespaces = array(
    '/' => 'App\\Blog\\',
    '/indo' => 'App\\Indo\\',
    '/dashboard' => 'App\\Dashboard\\'
);

codesaur::start(new Velociraptor\Application($app_namespaces));
