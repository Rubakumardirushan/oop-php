<?php
class animal{
    function genteral(){
        echo "I am animal" . PHP_EOL;
    }
}

class dog extends animal{
    function genteral(){
       parent::genteral();
        echo "I am dog" . PHP_EOL;
    }
}
class cat extends animal{
    function genteral(){
        parent::genteral();
        echo "I am cat" . PHP_EOL;
    }
}

$dog = new dog();
$dog->genteral();
$cat= new cat();
$cat->genteral();

?>