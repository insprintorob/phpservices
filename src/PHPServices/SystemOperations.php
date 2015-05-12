<?php
/**
 * Created by PhpStorm.
 * User: robbie
 * Date: 4/24/15
 * Time: 1:25 PM
 */

namespace PHPServices;


class SystemOperations
{
    public function echoOutput($message)
    {
        echo($message);
    }

    public function errorLog($message)
    {
        error_log($message);
    }

    public function sleep($seconds)
    {
        sleep($seconds);
    }
} 