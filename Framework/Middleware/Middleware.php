<?php

namespace Framework\Middleware;

/**
 * Description of Middleware
 *
 * @author andre
 */
class Middleware {

    private $request;
    private $middlewares = [];

    public function register(IMidlleware $middleware) {
        $this->middlewares[] = $middleware;
    }

    public function run(\Framework\Request\Request $request): \Framework\Request\Request{
        $this->request = $request;
        $this->executeRecursive(0);
        return $this->request;
    }

    function executeRecursive($position) {
        
        $middleware = isset($this->middlewares[$position])?$this->middlewares[$position]:null;
        
        if ($middleware == null){
            return;
        }
        
        $middleware->handle($this->request, function($request)use($position){
            $this->request = $request;
            $this->executeRecursive($position+1);
        });
        
    }

}
