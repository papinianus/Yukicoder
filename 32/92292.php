<?php
$L = trim(fgets(STDIN)) % 10;
$M = trim(fgets(STDIN)) % 40;
$N = trim(fgets(STDIN)) % 1000;
$sum = ($L*100 + $M*25 + $N) % 1000;
$hun = floor($sum/100);
$quart = floor(($sum % 100) / 25);
$one = $sum % 25;
echo $hun+$quart+$one;
echo PHP_EOL;