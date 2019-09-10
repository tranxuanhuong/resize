<?php
include_once "Circle.php";
include_once "Rectangle.php";
include_once "Square.php";

echo "---Circle<br>";

$circle=new Circle(4);
echo $circle->resize()."<br>";


echo "---Rectangle<br>";

$rectangle=new Rectangle(4,5);
echo $rectangle->resize()."<br>";

echo "---Square<br>";

$square=new Square(4);
echo $square->resize()."<br>";
