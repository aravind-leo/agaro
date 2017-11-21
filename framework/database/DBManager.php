<?php
class DBManager {
     
    private $host;
    private $username;
    private $password;
    private $dbname;
    private $con;
    private $pdo;
    
    public function __construct(){
        $DBconfig = $GLOBALS['config'];
        $this->host = $DBconfig->database->host;
        $this->dbname =  $DBconfig->database->agarro;
        $this->username =  $DBconfig->database->user;
        $this->password =  $DBconfig->database->password;
    } 
    /*
     * 
     * By default it will connect with the config db, we can specify different DB as parameter
     * 
     */
    public function connect($dbname = $this->dbname)
    {
        $charset = 'utf8mb4';
        
        $dsn = "mysql:host=$this->host;dbname=$dbname;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $this->pdo = new PDO($dsn, $user, $pass, $opt);
        
        $this->con = mysql_connect(  $this->host,  $this->username, $this->password)
        or die ("<br/>Could not connect to MySQL server");
        
        mysql_select_db($dbname ,$this->con)
        or die ("<br/>Could not select the indicated database");
        
        return  $this->pdo;
    }
    
    
    /**
     * Select query
     * 
     * @param unknown $sql
     * @return unknown
     */
    public function getSelectResults($sql,$params)
    {
       /*  $res = mysql_query($sql);
        if(mysql_num_rows($res)!=0) {
            while($rowData = mysql_fetch_array($res)) {
                var_dump($rowData);
                return $rowData;
            }
        } */
        
        try{
            $stmt =  $this->pdo->prepare($sql);
            $stmt->execute($params);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e) {
            var_dump($e.getMessage());
            
            if ($e->getCode() == 1062) {
                // Take some action if there is a key constraint violation, i.e. duplicate name
            } else {
                var_dump($e.getMessage());
                throw $e;
            }
        }
    }
    
    
    public function getSelectedRow($sql,$params)
    {
        /*  $res = mysql_query($sql);
         if(mysql_num_rows($res)!=0) {
         while($rowData = mysql_fetch_array($res)) {
         var_dump($rowData);
         return $rowData;
         }
         } */
        
        try{
            $stmt =  $this->pdo->prepare($sql);
            $stmt->execute($params);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e) {
            var_dump($e.getMessage());
            
            if ($e->getCode() == 1062) {
                // Take some action if there is a key constraint violation, i.e. duplicate name
            } else {
                var_dump($e.getMessage());
                throw $e;
            }
        }
    }
    
    
    /*
     * insert query, it will return the last inserted id
     * 
     */
    public function insertData($sql,$params)
    {/* 
        if ($this->con->query($sql) === TRUE) {
            $last_id = mysql_insert_id();
            return $last_id;
        } */
        try{
            $stmt =  $this->pdo->prepare($sql);
        $stmt->execute($params);
        }
        catch (PDOException $e) {
            var_dump($e.getMessage());
            
            if ($e->getCode() == 1062) {
                // Take some action if there is a key constraint violation, i.e. duplicate name
            } else {
                var_dump($e.getMessage());
                throw $e;
            }
        }
    }
    
    
    public function updateData($sql,$params){
        /* 
        if ($this->con->query($sql) === TRUE) {
           return true;
        }else {
            return false;
        } */
        
        try{
            $stmt =  $this->pdo->prepare($sql);
            $stmt->execute($params);
        }
        catch (PDOException $e) {
            var_dump($e.getMessage());
            
            if ($e->getCode() == 1062) {
                // Take some action if there is a key constraint violation, i.e. duplicate name
            } else {
                var_dump($e.getMessage());
                throw $e;
            }
        }
    }
    
    /**
     *
     * Close the database connection
     */
    public function close_connection()
    {
        //$this->con = null;
        $this->pdo = null;
    }
        
}

?>