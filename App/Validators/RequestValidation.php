<?php

namespace App\Validators;
use Illuminate\Database\Capsule\Manager as Capsule;
class RequestValidation
{


public static function uniqueValitation (String $column, string $value, string $policy):bool
{
    if ($value !=null && !empty(trim($value))) {
        return !Capsule::table($policy)->where($column,'=', $value)->exists();
    }
return true;
}

public  static function fieldRequired(String $column,  $value, bool $policy)
{
 return $value !=null && !empty(trim($value));
}
    
}