<?php

require '../vendor/autoload.php';

use App\Hello;

$greetings = new Hello;

echo $greetings->talk();
