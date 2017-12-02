<?php


function aggaroErrorHandler($code, $message, $file, $line) {
    
    //Need to write the handler here, send mail or log it some error logger
    
    echo "Error at code ".$code." and message is ";
    print_r($message);
    echo "Error at file ".$file." and line no ";
    print_r($line);
    
    
}

function fatalErrorShutdownHandler()
{
    $last_error = error_get_last();
    if ($last_error['type'] === E_ERROR) {
        // fatal error
        aggaroErrorHandler(E_ERROR, $last_error['message'], $last_error['file'], $last_error['line']);
    }
}


set_error_handler('aggaroErrorHandler');
register_shutdown_function('fatalErrorShutdownHandler');


define("DS", DIRECTORY_SEPARATOR);

define("ROOT", getcwd() . DS);

define("APP_PATH", ROOT . 'application' . DS);

define("FRAMEWORK_PATH", ROOT . "framework" . DS);

define("PUBLIC_PATH", ROOT . "public" . DS);

// Include and configure log4php
include(FRAMEWORK_PATH.'log/Logger.php');
Logger::configure('config.xml');


$logger = Logger::getLogger(basename(__FILE__));
$logger->info('Testing');


require "framework/core/AgarroFramework.php";

AgarroFramework::run();