<?php

namespace App\Repositories;

use App\Models\Category;
use PDOException;

class CategoryRepository
{
    protected $_category;

    public function __construct()
    {
        $this->_category = new Category ;
    }

    public function getAllCategory()
    {
        try {
            return $this->_category::all()->count();
            
        } catch (PDOException $Ex) {
            //throw $th;
        }
        
    }
    public function createCategory($request)
    {
        Category::create([
            'name' => $request->name,
            'format_name' => formattedString($request->name) ,

        ]);
    }
}
