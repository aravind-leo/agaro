<?php

class DBConfig
{

    private $username;

    private $password;
    
    private $hostname;

    private $dbhandle;

    function __construct($username, $password, $host)
    {
        $this->username = $username;
        $this->password = $password;
        $this->hostname = $host;
    }

    public function createDBConnection($dbName)
    {
        // connection to the database
        $this->dbhandle = mysql_connect($host, $username, $password) or die("Unable to connect to MySQL");
        echo "Connected to MySQL<br>";
        
        // select a database to work with
        $selected = mysql_select_db($dbName, $this->dbhandle) or die("Could not select DB");
    }

    public function getResults($query)
    {
        // execute the SQL query and return records
        $result = mysql_query($query);
        return result;
    }

    public function insertData($query)
    {
        
    }
    
    public function updateDB($query){
        
    }
    
    
    // close the connection
    public function closeConnection()
    {
        mysql_close($this->dbhandle);
    }
}
?>