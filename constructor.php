<?php
class box{
    public $length;
    public $width;
    public $height;
    function __construct($length,$width,$height){
        $this->length=$length;
        $this->width=$width;
        $this->height=$height;
    }
    function get_volume(){
        return $this->length*$this->width*$this->height;
    }
}

$blackbox= new box(10,20,30);
echo "Volume of black box is :".$blackbox->get_volume();

?>