<?php

$a = 0;
$b = 0;

echo "entrez un nombre : ";
fscanf(STDIN, "%d\n", $a);
echo "entrez un autre nombre : ";
fscanf(STDIN, "%d\n", $b);

$somme = $a + $b;
echo "la somme de $a + $b est : $somme";
