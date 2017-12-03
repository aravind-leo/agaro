<?php

require_once APP_PATH. 'database/UserDAL.php';
require_once APP_PATH.'controllers/Controller.php';
require_once APP_PATH.'controllers/AgarroControllerException.php';



class UserController extends Controller {
    
    private $log;
    
    public function __construct(){
        $this->log = Logger::getLogger(__CLASS__);
    }
    
    
    public function authenticationAction(){
        
        
        $this->log->info("Inside user Controller");
        
        //check if session is active and its same user, then no need to login again
        
        if( isset($_POST['email']) && isset($_POST['password'])   )
        {
            $password = md5($_POST['password']);
            $user = $_POST['email'];
            $dal = new UserDAL(); 
            $userArray = $dal->userAuthenticate($user, $password);
            
            if(!empty($userArray)){
                
                if(!isset($_SESSION['user']))
                {
                    $this->log->info("Login successfull, create session");
                session_start();
                $_SESSION['user'] = $userArray;
                }
            }else{
                $this->log->info("Login error, show the login page again");
                $isLoginFailed = true;
                $errorMsg  = "Please enter valid credentials";
                include VIEW_PATH.'login.php';
            }
            
            include VIEW_PATH.'/patient/patientProfileView.php';
        }
        else {
            $this->log->info("Login error, show the login page again");
            $isLoginFailed = true;
            $errorMsg  = "Please enter valid credentials";
            include VIEW_PATH.'login.php';
        }
        
    }
    
    public function createAction(){
        if(isset($_POST) && sizeof($_POST) > 0)
        {
            $dal = new UserDAL();
            $userArray = $dal->createAccount($_POST);
            
            
        }
    }
   
    
    
    public function loginAction()
    {
        include VIEW_PATH.'login.php';
    }
    
    public function registerAction()
    {
        include VIEW_PATH.'register.php';
    }
    
    
    public function logoutAction(){
        $this->log->info("Callig log out, will destroy session and sends user out of application");
        
        session_destroy();
        include  VIEW_PATH . "logout.php";
        
        
    }
    
}