<?php
/**
 * Created by PhpStorm.
 * User: robbie
 * Date: 4/18/15
 * Time: 1:52 PM
 */

namespace PHPServices;


class StringOperations
{
    public function lowercase($string)
    {
        return strtolower($string);
    }

    public function firstCharacter($string)
    {
        return $string[0];
    }

    public function replace($find, $replace, $string)
    {
        $newString = str_replace($find, $replace, $string);
        return $newString;
    }

    public function inString($needle, $haystack)
    {
        return strstr($haystack, $needle);
    }

    public function randomNumbers()
    {
        $string = '';

        for($i = 0; $i < 100; $i++) {
            $string = $string . rand(0,9);
        }

        return $string;
    }

    public function randomWhitespace()
    {
        $amount = rand(0,10);

        $string = '';

        for($i = 0; $i < $amount; $i++) {
            $string = $string . "\n\t ";
        }

        return $string;
    }

    public function randomHash()
    {
        $string = $this->randomNumbers();

        $string = hash('sha256', $string);

        return $string;
    }

    public function exportToString($var)
    {
        $exported = var_export($var, true);
        return $exported;
    }

    public static function __callStatic($name, $arguments)
    {
        $stringOperations = new StringOperations();
        $functionName = str_replace("static", '', $name);
        $functionName = lcfirst($functionName);
        $result = call_user_func_array(array($stringOperations, $functionName), $arguments);
        return $result;
    }
}