<?php

namespace shape{
	abstract class Shape{
        abstract function getArea();
    }
}
    
namespace color{
	class Color
    {
        public $name;
    }
}
    
namespace circle{
	require_once "Shape.php";
    
    class Circle extends Shape{
        public $radius;
        
        public function getArea() {
            return (pi() * $this->radius * $this->radius);
        }
    }
}

namespace polygon{
	include_once "Shape.php";
    
    abstract class Polygon extends Shape
    {
        abstract function getNumberOfSides();
    }
}
    
?>
    