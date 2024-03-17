<?php

class user{
    private $name;
    private $passoword;
    
    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
        return $this->name;
    }
    function set_password($password){
        $this->password=$password;
    }
    function get_password(){
        return $this->password;
    }
    
}
 $user = new user();
 
$user->set_name('John');
$user->set_password('1234');
echo "Name is :".$user->get_name();
echo "<br>";
echo "Password is :".$user->get_password();
?>