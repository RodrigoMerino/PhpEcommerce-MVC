<?php

namespace App\Services;

use App\Repositories\CategoryRepository;
use App\Helpers\Request;
use App\Validators\RequestValidation;

class CategoryService
{
    protected $_categoryRepository;
public $errors = [];

    public function __construct()
    {
        $this->_categoryRepository = new CategoryRepository;
    }


    public function getAllCategory()
    {
        return $this->_categoryRepository->getAllCategory();
    }

    public function createCategory()
    {
        $request = Request::getData('post');

        if (Request::hasData('post')) {

            $rules = [
                'name' => ['uniqueValidation' => 'categories', 'fieldRequired' => true, 'minLength' => 5]
            ];
            //lo que puede hacer es convertir en mi clase requestValidation, convertir lo que vaya aun json y asi no usar $_POST en abide y seguir usando $request
            $validate = new RequestValidation;
            $validate->abide($_POST, $rules);

            if ($validate->hasError()) {
              return  var_dump($validate->getErrorMsg() ) ;
                exit;
            }
            return $this->_categoryRepository->createCategory($request);
        }
        return null;
    }
}
