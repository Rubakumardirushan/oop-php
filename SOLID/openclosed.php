<?php
interface shape{
    public function area();
}
 class Rectangle implements shape{
     private $width;
     private $height;
     public function __construct($width,$height){
         $this->width=$width;
         $this->height=$height;
     }
     public function area(){
         return $this->width*$this->height;
     }
 }
class Circle implements shape{
    private $radius;
    public function __construct($radius){
        $this->radius=$radius;
    }
    public function area(){
        return $this->radius*$this->radius*pi();
    }
}
$circle= new Circle(5);
$rectangle= new Rectangle(5,5);
echo $circle->area().PHP_EOL;
echo $rectangle->area().PHP_EOL;

?>