<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};


$person = new Person();
$person->goodBye('budi');
$person->hello('fahmi');
