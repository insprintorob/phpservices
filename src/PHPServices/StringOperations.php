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
    public function uppercase($string)
    {
        return strtoupper($string);
    }

    /**
     * @param $string
     * @return string
     */
    public function lowercase($string)
    {
        return strtolower($string);
    }

    /**
     * @param $string
     * @return string
     */
    public function firstCharacter($string)
    {
        return $string[0];
    }

    /**
     * @param $find
     * @param $replace
     * @param $string
     * @return string
     */
    public function replace($find, $replace, $string)
    {
        $newString = str_replace($find, $replace, $string);
        return $newString;
    }

    /**
     * @param $needle
     * @param $haystack
     * @return string
     */
    public function inString($needle, $haystack)
    {
        return strstr($haystack, $needle);
    }

    /**
     * @return string
     */
    public function randomNumbers()
    {
        $string = '';

        for($i = 0; $i < 100; $i++) {
            $string = $string . rand(0,9);
        }

        return $string;
    }

    /**
     * @return string
     */
    public function randomWhitespace()
    {
        $amount = rand(0,10);

        $string = '';

        for($i = 0; $i < $amount; $i++) {
            $string = $string . "\n\t ";
        }

        return $string;
    }

    /**
     * Return a not cryptographically secure hash
     * @return string
     */
    public function randomHash()
    {
        $string = $this->randomNumbers();

        $string = hash('sha256', $string);

        return $string;
    }

    /**
     * @param $var
     * @return string
     */
    public function exportToString($var)
    {
        $exported = var_export($var, true);
        return $exported;
    }

    /**
     * Strip text matched by the first matched regex
     *
     * @param $pattern
     * @param $subject
     * @return string
     */
    public function stripRegex($pattern, $subject) {
        $matches = array();

        preg_match($pattern, $subject, $matches);

        if(isset($matches[0])) {
            $firstMatch = $matches[0];
        } else {
            $firstMatch = '';
        }

        $subject = str_replace($firstMatch, '', $subject);

        return $subject;
    }

    /**
     * @param $pattern
     * @param $subject
     * @return array
     */
    public function matchRegex($pattern, $subject)
    {
        $matches = array();

        preg_match($pattern, $subject, $matches);

        return $matches;
    }

    public function countRegex($pattern, $subject)
    {
        $matches = array();

        preg_match($pattern, $subject, $matches);

        return count($matches);
    }

    /**
     * Return the first match of a regular expression.
     * Good if you know you will only get one result.
     *
     * @param $pattern
     * @param $subject
     * @return array
     */
    public function matchOneRegex($pattern, $subject)
    {
        $matches = array();

        preg_match($pattern, $subject, $matches);

        return $matches[0];
    }

    /**
     * Normalized parameters of native PHP function
     * As with the other string functions in this class
     * the subject is the last parameter.
     *
     * @param $start
     * @param $length
     * @param $string
     *
     * @return string
     */
    public function subString($start, $length, $string)
    {
        $subString = substr($string, $start, $length);

        return $subString;
    }

    /**
     * @param $string
     * @return int
     */
    public function stringLength($string)
    {
        return strlen($string);
    }

    /**
     * Normalised parameters
     * Subject is the last parameter
     *
     * @param $string
     * @param $subject
     * @return bool|int
     */
    public function stringPosition($string, $subject)
    {
        return strpos($subject, $string);
    }

    public function upperCaseFirst($string)
    {
        return ucfirst($string);
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