<?php
require_once  FRAMEWORK_PATH . 'database/DBManager.php';



class UserDAL {
    
    private $con;
    
    public function __construct(){
     
        $dbManager = new DBManager();
        $this->con = $dbManager->connect($config['database']['dbname']);
        
    }
    
    public function userAuthenticate($user,$password)
    {
        $sql = "select * from user where email = ? and password = ?";
        $params = array($user,$password);
        $resultArray  = $dbManager->getSelectedRow($sql, $params);
        return $resultArray;
    }
    
    
}
