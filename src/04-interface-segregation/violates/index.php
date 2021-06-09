<?php

use InterfaceSegregation\Violates\Duck;
use InterfaceSegregation\Violates\Penguin;

require './../../../vendor/autoload.php';

$duck = new Duck();
$penguin = new Penguin();

var_dump($duck->walk());
var_dump($duck->fly());
var_dump($duck->swim());

var_dump($penguin->walk());
var_dump($penguin->fly());
var_dump($penguin->swim());
