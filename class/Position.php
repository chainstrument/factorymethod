<?php 

class Position
{
    protected $x;

    protected $y;

    public function __construct()
    {
    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function getX()
    {
       return $this->x;
    }

    public function setY($y)
    {
        $this->y = $y;
    }

    public function getY()
    {
       return $this->y;
    }
}