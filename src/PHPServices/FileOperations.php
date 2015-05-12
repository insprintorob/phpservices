<?php
/**
 * Created by PhpStorm.
 * User: robbie
 * Date: 4/18/15
 * Time: 12:31 PM
 */
namespace PHPServices;

class FileOperations
{
    public function getContents($fileName)
    {
        $contents = file_get_contents($fileName);

        return $contents;
    }
} 