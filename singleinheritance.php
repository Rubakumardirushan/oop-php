<?php

class car{
    function driver(){
        echo "I am driving car";
    }
}
class electic_car extends car{
    function battery(){
        echo "I am using battery";
    }

}
/*
$tesla= new electic_car();
$tesla->driver();
$tesla->battery();
$normalcar= new car();
$normalcar->driver();
*/





?>