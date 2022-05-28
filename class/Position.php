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

    public function getX($x)
    {
       return $this->x = $x;
    }

    public function setY($y)
    {
        $this->y = $y;
    }

    public function getY($y)
    {
       return $this->y = $y;
    }
}