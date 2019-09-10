<?php
include_once "Resizeable.php";

class Circle implements Resizeable
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius=$radius;
    }

    public function getArea(){

        return pi() * pow($this->radius, 2);
    }

    public function resize($percent)
    {
        return $this->getArea()+($this->getArea()*$percent)/100;
    }

}
