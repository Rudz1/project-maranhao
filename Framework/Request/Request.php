<?php

namespace Framework\Request;

class Request{
    
    private $url;
    private $uri;
    private $method;
    

    public function __construct() {
        $this->url = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
        
        $baseUrl = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'];
        
        $uri = '/'.ltrim(str_replace($baseUrl, '', $this->url),'/');
        if(strpos($uri, '?') !== false){
            $uri = explode('?', $uri)[0];
        }
        $this->uri = $uri;
        
        $this->method = strtoupper($_SERVER['REQUEST_METHOD']);
        
    }
    
    public function getUrl() {
        return $this->url;
    }

    public function getUri() {
        return $this->uri;
    }

    public function getMethod() {
        return $this->method;
    }

    
}

