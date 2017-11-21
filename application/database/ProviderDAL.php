<?php

include DB_PATH."DBManager.php";

class ProviderDAL{
    
    public function __construct(){
        $db = new DBManager();
        $db->connect();
     }
     
     
     public function getAvailableSlots($date = date("m-d-Y"))
     {
         
     }
    
}