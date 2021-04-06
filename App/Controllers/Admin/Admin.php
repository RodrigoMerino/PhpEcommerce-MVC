<?php

namespace App\Controllers\Admin;

use App\Helpers\Request;
use \Core\View;
use \Core\SessionHandler;
use Illuminate\Database\Capsule\Manager as Capsule;

class Admin extends \Core\Controller
{
    public function indexAction()
    {
        SessionHandler::addSession('admin', 'some testing sessionsaaa');

        if (SessionHandler::existSession('admin')) {
            $data = SessionHandler::getSession('admin');
        } else {
            $data = 'session name not defined';
        }
        $user = Capsule::table('users')->where('id',1)->first();
var_dump($user);
$appName = getenv('APP_URL');
var_dump($appName);
        View::bladeRenderTemplate('admin/index', [
            'admin' => $user

        ]);
    }
    public function getAction()
    {
       // Request::refreshData();
        echo '<pre>';
        $data = Request::returnData('post', '');
        var_dump($data);

        //         if (Request::hasData('post')) {
        //         $request  =Request::getSingleData('post');
        // var_dump($request->email) ;
        //         }
        // else{
        //     echo 'data does not exists';
        // }
        //         // var_dump(Request::getAll());

        echo '</pre>';
    }
}
