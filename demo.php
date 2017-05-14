<?php

require('./vendor/autoload.php');

use Acme\User;

$distance = 2.5;
$skill = 4;
$user = new User('John', $skill, $distance);

echo 'Distance + skill rating: ' . sprintf("%.3f", $user->getRating()) . PHP_EOL;