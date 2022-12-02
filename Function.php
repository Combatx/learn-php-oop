<?php

require_once "data/Person.php";

$ridho = new Person('ridho', null);

$ridho->sayHello('Ridho');

$andi = new Person('andi', 'sambas');

$andi->sayHello(null);

echo Person::AUTHOR . PHP_EOL;
echo $ridho->info() . PHP_EOL;
