<?php

namespace App\Services;

use App\Repositories\CategoryRepository;
use App\Helpers\Request;
use App\Validators\RequestValidation;

class CategoryService
{
    protected $_categoryRepository;


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
            $data = RequestValidation::fieldRequired('name', $request->category, true);

            if ($data) {
                echo 'all good';
                return $this->_categoryRepository->createCategory($request);
            } else {
                echo 'field is required';
                exit;
            }
        }
    }
}
