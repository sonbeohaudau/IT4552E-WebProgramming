<?php
	namespace rectangle;
    require_once "Polygon.php";
	use polygon;

    class Rectangle extends polygon\Polygon
    {
        public $width;
        public $height;
        
        public function getArea()
        {
            return ($this->width * $this->height);
        }
        
        public function getNumberOfSides() {
            return(4);
        }
    }
?>
