<?php

$a = true;
$b = 25;
$c = "coucou";

echo $a . "\n";
echo $b . "\n";
echo $c . "\n";
echo gettype($a) . "\n";
echo gettype($b) . "\n";
echo gettype($c) . "\n";

$s = (string) $b;

echo $s . ' ' . gettype($s) . "\n";
