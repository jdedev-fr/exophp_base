<?php

function fibo($num)
{
    if ($num == 0) return 0;
    elseif ($num == 1) return 1;
    else return fibo($num - 1) + fibo($num - 2);
    echo "test";
}

$n = 0;
echo "Quel nombre de fiboncci ?";
fscanf(STDIN, "%d\n", $n);

$res = fibo($n);
echo "Le résultat est : $res";
