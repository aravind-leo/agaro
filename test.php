<?php

$date = date("m-d-Y");

echo $date;
define("DS", DIRECTORY_SEPARATOR);
define("ROOT", getcwd() . DS);
define("FRAMEWORK_PATH", ROOT . "framework" . DS);
$path = ROOT;

require_once  FRAMEWORK_PATH . 'database/DBManager.php';


$jsonStr = file_get_contents("$path/application/config/config.json");
//$jsonStr = file_get_contents("/application/config/config.json");
// if you put json_decode($jsonStr, true), it will convert the json string to associative array
$config = json_decode($jsonStr,true);
$GLOBALS['config']  = json_decode($jsonStr,true);


var_dump($config);

echo "*****************************************".$config['database']['host'];

$dbManager = new DBManager();
$con = $dbManager->connect($config['database']['dbname']);

$sql = "insert into user (userId,email,password,userType,activeInd) values (?,?,?,?,?) ";

$password = md5("123456");

$params = array(1,'ageesh',$password,"patient",1);

$dbManager->insertData($sql, $params);
