<?php
/**
 * Created by PhpStorm.
 * User: kaplay
 * Date: 7.05.2018
 * Time: 10:11
 */

namespace GenderApi;

class GenderApi 
{
    private $apiKey;
    
    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function findGender($name)
    {
        $apiKey = $this->apiKey;
        $getGender = json_decode(file_get_contents('https://genderapi.io/api/?key=' . $apiKey . '&name=' . urlencode($name)));
        return $getGender->gender;
    }

    public function result($name)
    {
        $apiKey = $this->apiKey;
        $getGender = json_decode(file_get_contents('https://genderapi.io/api/?key=' . $apiKey . '&name=' . urlencode($name)));
        return $getGender;
    }
}