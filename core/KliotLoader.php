<?php


namespace Core;


class KliotLoader
{
    public static function load($class)
    {
        str_replace('\\', DIRECTORY_SEPARATOR, $class);
        $file = kliot . '/' . $class . '.php';
        if (is_file($file)){
            require $file;
        }
    }
}