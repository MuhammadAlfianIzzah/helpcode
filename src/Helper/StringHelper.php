<?php

namespace Alfianizzah\Helpcode\Helper;

class StringHelper
{
    public static function helloWorld()
    {
        return "hello world";
    }
    public static function stringToArray($string)
    {
        return explode(" ", $string);
    }
}
