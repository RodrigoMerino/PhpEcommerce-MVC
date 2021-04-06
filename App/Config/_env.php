<?php
namespace App\Config;

// create a .env file in your root an call your keys here from that file
//i am using Vlucas dotenv package
define('BASE_PATH',realpath(__DIR__.'/../../'));

$dotEnv = \Dotenv\Dotenv::createUnsafeImmutable(BASE_PATH);
$dotEnv->safeLoad();