<?php

namespace App\Controllers\Admin;

use App\Helpers\Request;
use \Core\View;
use \Core\SessionHandler;

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
        View::bladeRenderTemplate('admin/index', [
            'admin' => $data

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
