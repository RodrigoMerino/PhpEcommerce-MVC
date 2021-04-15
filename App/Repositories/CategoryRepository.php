<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
    protected $_category;

    public function __construct()
    {
        $this->_category = new Category ;
    }

    public function getAllCategory()
    {
           return $this->_category::all();
        
    }
}
