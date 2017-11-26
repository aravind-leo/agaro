<?php
class AgarroFramework {
    
    
    public static function run($url) {
        
        self::init();
        
        self::autoload();
        
        self::dispatch($url);
        
        include COMPONENT_PATH."footer.php";
    }
    
    
    private static function init() {
        
        define("DS", DIRECTORY_SEPARATOR);
        
        define("ROOT", getcwd() . DS);
        
        define("APP_PATH", ROOT . 'application' . DS);
        
        define("FRAMEWORK_PATH", ROOT . "framework" . DS);
        
        define("PUBLIC_PATH", ROOT . "public" . DS);
        
        
        define("CONFIG_PATH", APP_PATH . "config" . DS);
        
        define("CONTROLLER_PATH", APP_PATH . "controllers" . DS);
        
        define ("COMPONENT_PATH", APP_PATH . "components" .DS);
        
        define("MODEL_PATH", APP_PATH . "models" . DS);
        
        define("VIEW_PATH", APP_PATH . "views" . DS);
        
        
        define("CORE_PATH", FRAMEWORK_PATH . "core" . DS);
        
        define('DB_PATH', FRAMEWORK_PATH . "database" . DS);
        
        define("LIB_PATH", FRAMEWORK_PATH . "libraries" . DS);
        
        define("HELPER_PATH", FRAMEWORK_PATH . "helpers" . DS);
        
        define("UPLOAD_PATH", PUBLIC_PATH . "uploads" . DS);
        
        define("DAL_PATH", APP_PATH . "database". DS);
        
        define("SERVICE_PATH", APP_PATH. "service". DS);
        
        
        // Load core classes
        
     /*    require CORE_PATH . "Controller.class.php";
        
        require CORE_PATH . "Loader.class.php";
        
        require DB_PATH . "Mysql.class.php";
        
        require CORE_PATH . "Model.class.php"; */
   
        $path = ROOT;
        $jsonStr = file_get_contents("$path/application/config/config.json");
         // if you put json_decode($jsonStr, true), it will convert the json string to associative array
        $GLOBALS['config']  = json_decode($jsonStr,true);
        
        $agaroConfig =    $GLOBALS['config'] ;
       // var_dump($GLOBALS['config']);
        
      
        session_start();
        
        include COMPONENT_PATH."header.php";
        
        
    }
    // Autoloading
    
    private static function autoload(){
        
        //spl_autoload_register(array(__CLASS__,'load'));
        
    }
    
    // Define a custom load method
    
    private static function load($classname){
            
            // Here simply autoload app’s controller and model classes
        $config = $GLOBALS['config'];
        
        if (isset($config['controllers'][$classname])) {
            //$class = print_r($config->controllers->$classname,1);
            $class = $config['controllers'][$classname];
            require_once CONTROLLER_PATH . "$class.php";
            return $class;
           
          }
    }
    
    
    
    private static function dispatch($url) {
        $url_array = array();
        $controller = "index";
        $action = "indexAction";
        if (isset($url) && ! empty($url)) {
            $url_array = explode("/", $url);
            
            // The first part of the URL is the controller name
            //$controller = isset($url_array[0]) ? $url_array[0] : '';
            if(isset($url_array[0]) && !empty($url_array[0]))
            {
                $controller = $url_array[0];
                 array_shift($url_array);
            }
            
            
            // The second part is the method name
            //$action = isset($url_array[0]) ? $url_array[0] : '';
            if(isset($url_array[0]) && !empty($url_array[0]) ){
                $action = $url_array[0];
                array_shift($url_array);
                $action = $action."Action";
            
            }
            // The third part are the parameters
            $query_string = $url_array;
        } 
        
       $object = self::load($controller);
       $obj = new $object; 
       $obj->{ $action }();
        
    }
    
}

?>