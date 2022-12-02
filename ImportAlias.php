<?php

require_once "data/Conflic.php";
require_once "data/Helper.php";

use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;
use function Helper\helpMe as help;
use const Helper\APPLICATION as APP;

$conlict1 = new Conflict1();
$conlict2 = new Conflict2();

help();

echo APP;
