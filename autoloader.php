<?php

include 'App/iran.php';

spl_autoload_register(function ($class){
    $class_file = __DIR__. "/" .$class.".php";
    if(!(file_exists($class_file) and is_readable($class_file))){
        die("Error");
    }
    include $class_file;
});

use \App\Services\CityServices;
use \App\Utilities\Response;

new CityServices;


Response::ResponseData([2, 24] , 200);