<?php
/**
 * Created by PhpStorm.
 * User: robbie
 * Date: 7/24/15
 * Time: 8:46 PM
 */

namespace PHPServices;


class DataTransformer
{
    public function jsonToObject($string)
    {
        return json_decode($string);
    }

    public function jsonToArray($string)
    {
        return json_decode($string, true);
    }

    public function objectToJson($object) {
        return json_encode($object);
    }
}