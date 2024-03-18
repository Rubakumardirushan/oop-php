<?php

trait swiming{
    function swim(){
        echo "I can swimming" . PHP_EOL;
    }
}

trait running{
    function run(){
        echo "I can run" . PHP_EOL;
    }
}

 class man{
        use swiming;
        use running;
        function genteral(){
            echo " Ican do anything" . PHP_EOL;
        }



 }


 class dirushan extends man{

 }

    $dirushan = new dirushan();
    $dirushan->swim();
    $dirushan->run();
    $dirushan->genteral();



?>