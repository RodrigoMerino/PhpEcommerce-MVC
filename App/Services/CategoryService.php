<?php

namespace App\Services;

use App\Repositories\CategoryRepository;

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
}
