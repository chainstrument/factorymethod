<?php 

class ShapeFactory {

    public function create($class, $position)
    {
        return new $class($position);
    }
}