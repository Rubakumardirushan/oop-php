<?php
// run time polymorephisam;
class animal{
    function makesound(){
        echo "animal....." . PHP_EOL;
    }
}
class dog extends animal{
    function makesound(){
        animal::makesound();
        echo "dog....." . PHP_EOL;
    }
}
class cat extends animal{
    function makesound(){
        animal::makesound();
        echo "cat....." . PHP_EOL;
    }
}


$dog = new dog();
$dog->makesound();
$cat= new cat();
$cat->makesound();


?>