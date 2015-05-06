<?php

require_once './vendor/autoload.php';

$factorial = new Factorial\Factorial();

var_dump($factorial->calculate(25));

var_dump($factorial->calculate(42));
