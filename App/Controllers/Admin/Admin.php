<?php

namespace App\Controllers\Admin;

use App\Helpers\Request;
use App\Models\Category;
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
        View::bladeRenderTemplate('admin/index', [
            "data" => $data

        ]);
    }
    public function categoriesAction()
    {
        $categories= Category::all();
        // $user = Capsule::table('users')->where('id',1)->first();
        // var_dump($categories);
       // Request::refreshData();
        // echo '<pre>';
        // $data = Request::returnData('post', '');
        // var_dump($data);

        // //         if (Request::hasData('post')) {
        // //         $request  =Request::getSingleData('post');
        // // var_dump($request->email) ;
        // //         }
        // // else{
        // //     echo 'data does not exists';
        // // }
        // //         // var_dump(Request::getAll());

        echo '</pre>';
        View::bladeRenderTemplate('admin/products/products', compact('categories'));

    }

}
