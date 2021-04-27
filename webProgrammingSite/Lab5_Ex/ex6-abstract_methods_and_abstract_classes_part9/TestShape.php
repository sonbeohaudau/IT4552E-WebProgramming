<?php

	include "Rectangle.php";
	include "Circle.php";
	include "Triangle.php";
	include "Color.php";
//	use circle;
//	use rectangle;
//	use triangle;
//	use color;
		
    $myCollection = array();
    
    $r = new Rectangle;
    $r->width = 5;
    $r->height = 7;
    $myCollection[] = $r;
    unset($r);
    
    $t = new Triangle;
    $t->base = 4;
    $t->height = 5;
    $myCollection[] = $t;
    
    $c = new Circle;
    $c->radius = 3;
    $myCollection[] = $c;
    unset($c);
    
    $c = new Color;
    $c->name = "blue";
    $myCollection[] = $c;
    unset($c);
    
    foreach($myCollection as $s)
    {
        if ($s instanceof Shape)
        {
            print("Area: " . $s->getArea() . "<br>\n");
        }
        
        if ($s instanceof Polygon)
        {
            print("Sides: " . $s->getNumberOfSides() . "<br>\n");
        }
        
        print("<br>\n");
    }
?>