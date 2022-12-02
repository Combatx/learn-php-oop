<?php

require_once "data/Conflic.php";
require_once "data/Helper.php";

use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conlict1 = new Conflict();
$conlict2 = new Data\Two\Conflict();

helpMe();

echo APPLICATION;
