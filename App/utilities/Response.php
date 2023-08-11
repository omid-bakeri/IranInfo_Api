<?php

namespace App\Utilities;

class Response{
    public static function ResponseData($data , $status_code){
        return json_encode($data);
    }
}