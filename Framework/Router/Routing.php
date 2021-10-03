<?php

namespace Framework\Router;

class Routing {
    private $routers = [];
    private $page404;
    private $baseUrl;
    
    public function setPage404($func) {
        $this->page404 = $func;
    }

    public function setBaseUrl($baseUrl) {
        $this->baseUrl = $baseUrl;
    }

    public function get($uri, $class, $functionName) {
        $this->routers[] = new Route($uri, Route::METHOD_GET, $class, $functionName);
    }
    
    public function post($uri, $class, $functionName) {
        $this->routers[] = new Route($uri, Route::METHOD_POST, $class, $functionName);
    }
    
    public function run(\Framework\Request\Request $request) {
      
        $url = $request->getUrl();
        
        $uri = $request->getUri();
        
        foreach ($this->routers as $route) {
           
            if($route->getUri() == $uri && $request->getMethod() == $route->getMethod()){
                $namespace = "\\".$route->getClass();
                $instance = new $namespace;    
                $instance->{$route->getFunctionName()}();
                    exit;
            }
        }
        
        if($this->page404){
            call_user_func($this->page404);
        }
    }
}