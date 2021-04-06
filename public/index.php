<?php

require '../vendor/autoload.php'; 
/**
 * calling global .env variables
 */
require_once __DIR__. '/../App/Config/_env.php';

$router = new Core\Router();
new \Core\Model();

$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('{controller}/{action}/{id:\d+}');
$router->add('admin/{controller}/{action}',['namespace'=>'Admin']);

echo '<p>';
getenv('APP_URL');

 echo '</p>';
$router->dispatch($_SERVER['QUERY_STRING']);


?>