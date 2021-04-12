<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    
    
    protected $table = 'categories';

    public $timestamps = true;

    protected  $fillable= ['name', 'short-name'];
    protected  $dates = ['deleted_at'];




    // Order Detail FK in order_detail
    //    public $detail = [];
}
