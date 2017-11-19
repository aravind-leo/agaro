<?php
class DBManager {
     
    private $host;
    private $username;
    private $password;
    private $dbname;
    private $con;
    
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
        $this->con = mysql_connect(  $this->host,  $this->username, $this->password)
        or die ("<br/>Could not connect to MySQL server");
        
        mysql_select_db($dbname ,$this->con)
        or die ("<br/>Could not select the indicated database");
        
        return $this->con;
    }
    
    
    /**
     * Select query
     * 
     * @param unknown $sql
     * @return unknown
     */
    public function getSelectResults($sql)
    {
        $res = mysql_query($sql);
        if(mysql_num_rows($res)!=0) {
            while($rowData = mysql_fetch_array($res)) {
                var_dump($rowData);
                return $rowData;
            }
        }
    }
    
    
    /*
     * insert query, it will return the last inserted id
     * 
     */
    public function insertData($sql)
    {
        if ($this->con->query($sql) === TRUE) {
            $last_id = mysql_insert_id();
            return $last_id;
        }
    }
    
    
    public function updateData($sql){
        
        if ($this->con->query($sql) === TRUE) {
           return true;
        }else {
            return false;
        }
    }
    
    /**
     *
     * Close the database connection
     */
    public function close_connection()
    {
        $this->con = null;
       
    }
        
}

?>