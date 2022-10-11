<?php 

spl_autoload_register(function ($class_name) {
    $url = $_SERVER['HTTP_HOST'] . ':' . $_SERVER['REQUEST_URI'];
    if(strpos($url,'includes') !== false){

        $path = "../classes/";
    }else{
        $path = "classes/";

    }
    $extension = ".class.php";
    require_once $path. $class_name . $extension; 
});

?>