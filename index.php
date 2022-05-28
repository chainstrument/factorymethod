<?php 

$position = new Position(15, 5);


$shape = new ShapeFactory();
$shape->create('Rectangle', $position);

$position = new Position(25, 5);
$shape->create('Circle', $position);