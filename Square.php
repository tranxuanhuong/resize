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


        return pow($this->width,2);
    }

    public function resize($percent)
    {
        return $this->getArea()+($this->getArea()*$percent)/100;
    }

}
