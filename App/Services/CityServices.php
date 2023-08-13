<?php


namespace App\Services;

class CityServices{
    public function getCities(): object
    {
        return (object)[1 ,2 ,3 ,4 ,5];
    }
}