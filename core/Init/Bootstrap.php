<?php

namespace Core\init;

/**
 * 
 */

abstract class Bootstrap{

    private $routes;

    public function getRoutes(){
        return $this->routes;
    }

    abstract protected function initRoutes();

    public function setRoutes(array $routes){
        $this->routes = $routes;
    }

    public function __construct(){
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    protected function run($url){
        
        $controller = null;

        foreach($this->getRoutes() as $path => $route){

                if($url == $route['route']){
                    $class = "App\\Controllers\\" . ucfirst($route['controller']);
    
                    $controller = new $class;
    
                    $action = $route['action'];
    
                    $controller->$action();
                    break;
                }    

        }
        
        if(!$controller){
            echo 'controller não exite';
        }
        

    }

    protected function getUrl(){
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);        
    }


}