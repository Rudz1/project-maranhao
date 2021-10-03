<?php

namespace Framework\App;

/**
 * Description of App
 *
 * @author andre
 */
class App {
    private  $request;
    private $middleware;
    private $router;
    
    public function __construct(\Framework\Request\Request $request,\Framework\Middleware\Middleware $middleware, \Framework\Router\Routing $router) {
        $this->request  = $request;
        $this->middleware = $middleware;
        $this->router = $router;
    }


    public function run() {
        $this->request = $this->middleware->run($this->request);
        $this->router->run($this->request);
    }
    
}
