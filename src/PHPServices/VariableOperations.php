<?php
/**
 * Created by PhpStorm.
 * User: robbie
 * Date: 5/28/15
 * Time: 4:53 PM
 */

namespace PHPServices;


class VariableOperations
{
    public function isVariableSet($variable)
    {
        return isset($variable);
    }
} 