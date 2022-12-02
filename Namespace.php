<?php

namespace {
    require_once "data/Conflic.php";
    require_once "data/Helper.php";

    $conlict1 = new \Data\One\Conflict();
    $conlict2 = new \Data\TWO\Conflict();

    echo Helper\APPLICATION . PHP_EOL;

    Helper\helpMe();
}
