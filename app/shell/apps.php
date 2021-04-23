<?php

class apps {
    
    protected $control = 'guest';
    protected $method = 'index';
    protected $parameter = [];
    
    public function __construct() {
        $url = $this->parseUrl();
        
        if (isset($url[0])){
            if (file_exists('app/control/' . $url[0] . '.php')){
                $this->control = $url[0];
                unset($url[0]);
            }
        }
        require_once 'app/control/' . $this->control . '.php';
        $this->control = new $this->control;
        if(isset($url[1])){
            if (method_exists($this->control, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        $this->parameter = $url ? array_values($url): [];
        call_user_func_array([$this->control, $this->method], $this->parameter);        
    }
    
    public function parseUrl(){
        if (isset($_GET["url"])){
            return $url = explode('/', filter_var(rtrim($_GET["url"], '/'),FILTER_SANITIZE_URL));
        }
    }
}