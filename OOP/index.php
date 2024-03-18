<?php
 class car{
     public $carname;
     function set_name($carname){
         $this->carname=$carname;
     }
     function get_carname(){
         return $this->carname;
     }
 }
 $car1= new car();
 $car1->set_name('black');

 echo "car name is :".$car1->get_carname();
?>