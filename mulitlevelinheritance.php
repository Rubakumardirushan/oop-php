<?php

class grandfater{
    private $grandfatername;
    function set_grandfatername($grandfatername){
        $this->grandfatername=$grandfatername;
    }
    function get_grandfatername(){
        return $this->grandfatername;
    }
    function  genertal(){
        echo "I am grandfater".PHP_EOL;
    
    }
}
class father extends grandfater{
    private $fathername;
    function set_fathername($fathername){
        $this->fathername=$fathername;
    }
    function get_fathername(){
        return $this->fathername;
    }
    function  genertal(){
        grandfater::genertal(); // method override
        echo "I am father".PHP_EOL;
    
    }
}
class my extends father{
    private $myname;
    function set_myname($myname){
        $this->myname=$myname;
    }
    function get_myname(){
        return $this->myname;
    }
    function  genertal(){
        
        echo "I am my".PHP_EOL;
        father::genertal(); // method override
       
    
    }
}
$my = new my();
$my->set_grandfatername('John');
$my->set_fathername('Doe');
$my->set_myname('Smith');
echo "Grandfater name is :".$my->get_grandfatername().PHP_EOL;
echo "Father name is :".$my->get_fathername().PHP_EOL;
echo "My name is :".$my->get_myname().PHP_EOL;
$my->genertal();

?>