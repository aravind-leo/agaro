<?php

require_once APP_PATH.'controllers/Controller.php';
require_once APP_PATH.'controllers/AgarroControllerException.php';


class ErrorController extends Controller{
    
    private $log;
    
    public function __construct(){
        $this->log = Logger::getLogger(__CLASS__);
    }
    
    
    public function indexAction(){
        $this->log->info("Showing error page");
        include VIEW_PATH.'/error.php';
    }
    
}