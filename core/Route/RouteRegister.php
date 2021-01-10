<?php


namespace Core\Route;


class RouteRegister
{
    public static $list = array();

    public static function bind($url, $controller, $function)
    {
        self::$list[$url]=$controller . '?' . $function;
    }

    public static function get()
    {
        return self::$list;
    }
}