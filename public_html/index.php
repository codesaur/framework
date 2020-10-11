<?php $autoload = require_once '../vendor/autoload.php';

/* DEVELOPMENT: v7.2020.05.25
 */

$app_namespaces = array(
    '/' => 'App\\Blog\\',
    '/indo' => 'Indoraptor\\',
    '/dashboard' => 'App\\Dashboard\\'
);

codesaur::start(new codesaur\Common\Application($app_namespaces));
