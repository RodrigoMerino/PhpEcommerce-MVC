<?php

namespace Core;
 use PDO;
 use App\Config\Config;
 use Illuminate\Database\Capsule\Manager as Capsule;
 
 class Model
{
    public function __construct()
    {
        $db = new Capsule;
        $db->addConnection([
            'driver' =>getenv('DB_DRIVER'),
            'host' => getenv('DB_HOST'),
            'database' => getenv('DB_NAME'),
            'username' => getenv('DB_USER'),
            'password' => getenv('DB_PASSWORD'),
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',


        ]);
        $db->setAsGlobal();
        $db->bootEloquent();

    }

}