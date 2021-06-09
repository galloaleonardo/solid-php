<?php

use LiskovSubstitution\Violates\Square;

require './../../../vendor/autoload.php';

$square = new Square();

$square->setHeight(10);
$square->setWidth(2);

$squareArea = $square->area();

var_dump('Area should be 20, but is ' . $squareArea);
