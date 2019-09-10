<?php
include_once "Resizeable.php";

class Rectangle implements Resizeable
{
    public $width;
    public $height;

    public function __construct($width,$height)
    {
        $this->width=$width;
        $this->height=$height;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }
    public function getArea(){

        $this->width+=$this->width*rand(1,100);
        $this->height+=$this->height*rand(1,100);
        return $this->width*$this->height;
    }

    public function resize()
    {
        return $this->getArea();

    }

}
