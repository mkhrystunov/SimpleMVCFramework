<?php

include_once('includes\\startup.php');

$db = new PDO('mysql:host=localhost;dbname=demo', 'root', '');
$registry->set('db', $db);

$template = new Template($registry);
$registry->set('template', $template);
$template->setPath(ROOT . 'templates');

$router = new Router($registry);
$registry->set('router', $router);
$router->setPath(ROOT . 'controllers');
$router->delegate();