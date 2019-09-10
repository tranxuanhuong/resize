<?php
include_once "Resizeable.php";

class Square implements Resizeable
{
    public $width;

    public function __construct($width)
    {
        $this->width=$width;

    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }
    public function getArea(){


        $this->width*=$this->width*rand(1,100);

        return pow($this->width,2);
    }

    public function resize()
    {
        return $this->getArea();
    }

}