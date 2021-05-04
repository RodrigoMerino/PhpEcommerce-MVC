<?php

namespace App\Controllers\Admin;

use App\Helpers\Request;
use App\Models\Category;
use \Core\View;
use \Core\SessionHandler;
use \App\Services\CategoryService;
class Admin extends \Core\Controller
{
    
    protected  $_categoryService;
    
    public function __construct()
    {
        
        $this->_categoryService =  new CategoryService;
    }


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

        //$categories = Category::all();
        $categories = $this->_categoryService->getAllCategory();
    

        View::bladeRenderTemplate('admin/products/products', compact('categories'));
    }

    public function createCategory()
    {
        $categories = $this->_categoryService->createCategory();


        var_dump($categories);
    }
}
