<?php
list($N, $H, $M, $T) = explode(" ", trim(fgets(STDIN)));
$M += ($N-1)*$T;
$H = $H+floor($M/60);
$M %= 60;
echo $H%24;
echo PHP_EOL;
echo $M;
echo PHP_EOL;
