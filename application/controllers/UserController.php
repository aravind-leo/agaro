<?php

require_once APP_PATH. 'database/UserDAL.php';

class UserController extends Controller {
    
    public function authentication(){
        
        if( isset($_POST['user']) && isset($_POST['password'])   )
        {
            $password = md5($_POST['password']);
            $user = $_POST['user'];
            $dal = new UserDAL();
            $userArray = $dal->userAuthenticate($user, $password);
            
            if(!empty($userArray)){
                session_start();
                $_SESSION['user'] = $userArray;
            }
            
            
            
        }
        
    }
    
    public function logout(){
        session_destroy();
        include  VIEW_PATH . "logout.php";
        
        
    }
    
}