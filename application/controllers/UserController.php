<?php

require_once APP_PATH. 'database/UserDAL.php';
require_once APP_PATH.'controllers/Controller.php';


class UserController extends Controller {
    
    public function authentication(){
        
        if( isset($_POST['email']) && isset($_POST['password'])   )
        {
            $password = md5($_POST['password']);
            $user = $_POST['email'];
            $dal = new UserDAL(); 
            $userArray = $dal->userAuthenticate($user, $password);
            
            if(!empty($userArray)){
                session_start();
                $_SESSION['user'] = $userArray;
            }
            
            
            
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
    
    
    public function logout(){
        session_destroy();
        include  VIEW_PATH . "logout.php";
        
        
    }
    
}