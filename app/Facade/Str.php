<?php

namespace App\Facade;
use App\Helper\Str as BasicStr ;

class Str extends Facade 
{ 
    public static function getFacadeAccessor(){
        return BasicStr::class;
    }
}