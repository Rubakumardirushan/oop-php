<?php
class singleton{
    private static $instance;
    private function __construct(){
        echo "This is a singleton pattern\n";
    }
    public static function getInstance(){
        if(self::$instance==null){
            self::$instance=new singleton();
        }
        return self::$instance;
    }
    public function check(){
        echo "This is a singleton pattern\n";
    }
}

$singleton= singleton::getInstance();
//$singleton->check();


?>