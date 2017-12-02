<?php
// Base Controller

class Controller{
    
   
    
    public $config;
    
    
    public function __construct(){
        
        $this->config = $GLOBALS['config'];
        
    }
    
    public function __call($name, $arguments) {
        if (!method_exists($this, $name)) {
            throw new AgarroControllerException($name . ' Method not exists');
        }
    }
    
    
    public function redirect($url,$message,$wait = 0){
        
        if ($wait == 0){
            
            header("Location:$url");
            
        } else {
            
            include CURR_VIEW_PATH . "message.html";
            
        }
        
        
        exit;
        
    }
    
}