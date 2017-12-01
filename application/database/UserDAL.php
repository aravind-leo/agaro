<?php

require_once  FRAMEWORK_PATH . 'database/DBManager.php';



class UserDAL {
    
    private $con;
    private $dbManager;
    public function __construct(){
        $config = $GLOBALS['config'];
        $this->dbManager = new DBManager();
        $this->con = $this->dbManager->connect($config['database']['dbname']);
        
    }
    
    public function userAuthenticate($user,$password)
    {
        $sql = "select * from user where email = ? and password = ?";
        $params = array($user,$password);
        $resultArray  = $this->dbManager->getSelectedRow($sql, $params);
        return $resultArray;
    }
    public function createAccount()
    {
        
    }
    
    
}
