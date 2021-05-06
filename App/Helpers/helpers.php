<?php

use voku\helper\Paginator;
use Illuminate\Database\Capsule\Manager as Capsule;
use Carbon\Carbon;
/** 
 * @comment: toma el string y lo convierte al patrón que designamos
 * @Date: 2021-04-16 16:50:16 
 * @param: $value 
 * @return:string  
 */
function formattedString(String $value)
{
    // remover todo lo que no sea : guion bajo,letras,numeros, espacios
    $value =  preg_replace('![^' . preg_quote('_') . '\pL\pN\s]+!u', '', mb_strtolower($value));

    // reeemplazar guion bajo con -

    $value =  preg_replace('![' . preg_quote('_') . '\s]+!u', '-', mb_strtolower($value));

    //reemplazar espacios con
    return trim($value, '-');
}


function pagination($page, $total, $table, $object)
{

    $categories = [];

    $pages = new Paginator($page, 'p');
    $pages->set_total($total);

    $data = Capsule::select("SELECT * FROM $table ORDER BY created_at DESC" .  $pages->get_limit());
    foreach ($data as  $item) {
        $added = new Carbon($item->created_at);
        array_push($categories, [

            'id' => $item->id,
            'name' => $item->name,
            'format_name' => $item->format_name,
            'added' => $added->toFormattedDateString()

        ]);
    }
    return [$categories, $pages->page_links()];
}
