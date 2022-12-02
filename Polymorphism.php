<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Ridho");
var_dump($company);

$company->programmer = new BackendProgrammer("Ridho");
var_dump($company);

$company->programmer = new FrontendProgrammer("Ridho");
var_dump($company);

sayHelloProgrammer(new Programmer('Ridho'));
sayHelloProgrammer(new BackendProgrammer('Ridho'));
sayHelloProgrammer(new FrontendProgrammer('Ridho'));
