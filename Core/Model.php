<?php

namespace Core;
 use PDO;
 use App\Config\Config;
 use Illuminate\Database\Capsule\Manager as Capsule;
 
 abstract class Model
{
    public function __construct()
    {
        $db = new Capsule;
        $db->addConnection([
            'driver' => getenv('APP_DRIVER'),
            'host' => getenv('APP_HOST'),
            'host' => getenv('APP_HOST'),
            'username' => getenv('APP_USER'),
            'username' => getenv('APP_USER'),
            'username' => getenv('APP_USER'),
            'username' => getenv('APP_USER'),
            'collation' => getenv('utf8_unicode_ci'),


        ]);
        $db->setAsGlobal();
        $db->bootEloquent();

    }

}