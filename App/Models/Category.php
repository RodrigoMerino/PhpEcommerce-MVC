<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
class Category extends Model
{
    use SoftDeletes;


    protected $table = 'categories';

    public $timestamps = true;

    protected  $fillable = ['name', 'format_name'];
    protected  $dates = ['deleted_at'];


    public function transform($data)
    {
    $categories = [];

        foreach ($data as  $item) {
            $added = new Carbon($item->created_at);
            array_push($categories, [

                'id' => $item->id,
                'name' => $item->name,
                'format_name' => $item->format_name,
                'added' => $added->toFormattedDateString()

            ]);
        }
        return $categories;
    }

    // Order Detail FK in order_detail
    //    public $detail = [];
}
