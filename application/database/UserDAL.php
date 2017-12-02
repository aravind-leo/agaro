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
    public function createAccount($postArray)
    {
            
        if(isset($postArray['fname'])){
            $name = $postArray['fname'];
        }
        
        if(isset($postArray['user'])){
            $user = $postArray['user'];
        }
        else{
            $user='user';
        }
        
        if(isset($postArray['lname'])){
          $lName= $postArray['lname'];
        }
        if(isset($postArray['dob'])){
           $dob = $postArray['dob'];
        }
        if(isset($postArray['gender'])){
           $gender = $postArray['gender'];
        }
        if(isset($postArray['email'])){
          $mail=  $postArray['email'];
        }
        if(isset($postArray['pwd'])){
            $pwd = $postArray['pwd'];
        }
        
        if(isset($postArray['phone'])){
          $phone = $postArray['phone'];
        }
        if(isset($postArray['state'])){
          $state= $postArray['state'];
        }
        if(isset($postArray['city'])){
            $city= $postArray['city'];
        }
        
        // $db->prepare("INSERT INTO usersdata (Firstname, Lastname, Email,Passward) VALUES (:name, :lstname, :email,:pass)");
        
        $sql = "insert into user (email,password,userType,activeInd,lastLoggedIn,createdDate,updatedDate) values (?,?,?,?,now(),now(),now()) ";
        $params = array($mail,md5($pwd),$user,1);
        $userId =  $this->dbManager->insertData($sql, $params);
        
        $addressSql = "insert into address(id,userId,homePhone) values(?,?,?)";
        $addParams = array(1,$userId,$phone);
        $this->dbManager->insertData($sql, $addParams);
        
        $userQuery = "insert into userdetails(id,userId,dob,gender,contactEmail,firstName,lastName) values(?,?,?,?,?,?,?)";
        $userParams = array(1,$userId,$dob,$gender,$mail,$name,$lName);
        $this->dbManager->insertData($sql, $userParams);
        
        
    }
    
    
}
