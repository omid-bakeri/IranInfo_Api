<?php

use App\Services\CityServices;
use App\Utilities\Response;

include '../../../autoloader.php';

$cs = new CityServices();
$result  = $cs->getCities();

$re = new Response();
echo Response::ResponseData($result , 200);