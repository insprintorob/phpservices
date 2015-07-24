<?php
/**
 * Created by PhpStorm.
 * User: robbie
 * Date: 4/19/15
 * Time: 9:35 AM
 */

namespace PHPServices;


class ArrayOperations
{
    public function implode($glue = ',', $input)
    {
        return implode($glue, $input);
    }

    public function explode($delimiter = ',', $input)
    {
        return explode($delimiter, $input);
    }

    public function inArray($needle, $haystack)
    {
        return in_array($needle, $haystack);
    }

    public function shuffle($array)
    {
        shuffle($array);

        return $array;
    }

    public function sizeOf($var)
    {
        return sizeof($var);
    }

    public function flip($array)
    {
        return array_flip($array);
    }
}