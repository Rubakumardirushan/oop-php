<?php

class grandfater{
    private $grandfatername;
    function set_grandfatername($grandfatername){
        $this->grandfatername=$grandfatername;
    }
    function get_grandfatername(){
        return $this->grandfatername;
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
}
class my extends father{
    private $myname;
    function set_myname($myname){
        $this->myname=$myname;
    }
    function get_myname(){
        return $this->myname;
    }
}
$my = new my();
$my->set_grandfatername('John');
$my->set_fathername('Doe');
$my->set_myname('Smith');
echo "Grandfater name is :".$my->get_grandfatername().PHP_EOL;
echo "Father name is :".$my->get_fathername().PHP_EOL;
echo "My name is :".$my->get_myname().PHP_EOL;

?>