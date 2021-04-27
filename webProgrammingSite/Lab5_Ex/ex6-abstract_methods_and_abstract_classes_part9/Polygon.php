<?php
	namespace polygon;
	include_once "Shape.php";
	use shape;
    
    
    abstract class Polygon extends shape\Shape
    {
        abstract function getNumberOfSides();
    }
?>