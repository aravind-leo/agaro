<?php

require_once("Controller.php");

class IndexController extends Controller{
    
    public function mainAction(){
        
      echo "*********************TEST*************";
        
       
        
    }
    
    public function indexAction(){
        
     
        
        // Load View template
        
        include  CURR_VIEW_PATH . "index.html";
        
    }
    
    public function menuAction(){
        
       echo "**************** MENU *************";
        
    }
    
    public function dragAction(){
        
        include CURR_VIEW_PATH . "drag.html";
        
    }
    
    public function topAction(){
        
        include CURR_VIEW_PATH . "top.html";
        
    }
    
    
}