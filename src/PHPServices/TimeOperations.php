<?php
/**
 * Created by PhpStorm.
 * User: robbie
 * Date: 6/15/15
 * Time: 8:33 PM
 */

namespace PHPServices;


class TimeOperations
{
    public function currentTime()
    {
        $time = time();
        return $time;
    }
}