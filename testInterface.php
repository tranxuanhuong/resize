<?php
include_once "Circle.php";
include_once "Rectangle.php";
include_once "Square.php";

const PERCENT = 15;

$circle = new Circle(6);
$rectangle = new Rectangle(10, 12);
$square = new Square(5);
echo 'Dt Circle : ' . $circle->getArea() . '<br>';
echo 'Diện tích hình tròn: ' . $circle->resize(PERCENT) . '<br>';
echo 'Dt Rectangle:' . $rectangle->getArea() . '<br>';
echo 'Diện tích hình chữ nhật : ' . $rectangle->resize(PERCENT) . '<br>';
echo 'Dt Square:' . $square->getArea() . '<br>';
echo 'Diện tích hình vuông: ' . $square->resize(PERCENT);

