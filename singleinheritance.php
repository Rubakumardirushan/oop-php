<?php

class car{
    function driver(){
        echo "I am driving car" . PHP_EOL;
    }
}

class electric_car extends car{
    // Method overriding: Overrides the driver() method of the parent class
    function driver(){
        // Calls the driver() method of the parent class
        parent::driver();
        echo "I am driving electric car" . PHP_EOL;
    }
    
    function battery(){
        echo "I am using battery" . PHP_EOL;
    }
}

$tesla = new electric_car();
$tesla->driver();
$tesla->battery();

$normal_car = new car();
$normal_car->driver();
?>
