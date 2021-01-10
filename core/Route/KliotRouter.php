<?php


namespace Core\Route;


use App\Controller;


class KliotRouter
{
    public function __construct()
    {
        require_once 'route\route.php';
    }

    public function dispatch()
    {
        $self = str_replace('index.php', '', $_SERVER['PHP_SELF']);
        $url = str_replace($self, '', $_SERVER['REQUEST_URI']);
        $list = RouteRegister::get();
        if(isset($list[$url])){
            $route = explode('?', $list[$url]);
            $controllerName = 'App\Controller\\'.$route[0];
            $method = $route[1];
            $controller = new $controllerName;
            return $controller->$method();
        }else{
            return '404';
        }
    }
}