<?php 

class Rectangle implements shapeInterface
{

    protected $position;

    public function __construct(Position $position)
    {
        $this->position = $position;
    }

    public function draw()
    {
       return sprintf('we draw with this position x: %s and y:%s', 
                $this->position->getX(),            
                $this->position->getY(),            
        );
    }
}