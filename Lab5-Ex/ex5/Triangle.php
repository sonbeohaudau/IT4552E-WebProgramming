<?php 
//require is identical to include except upon failure it will also produce a 
//fatal E_COMPILE_ERROR level error. In other words, it will halt the script
//whereas include only emits a warning (E_WARNING) which allows the script
//to continue.
require "Polygon.php";

class Triangle extends Polygon
{
    public $base;
    public $height;
    
    public function getArea() {
        return(($this->base * $this->height)/2);
    }
    
    public function getNumberOfSides() {
        return(3);
    }
}
?>