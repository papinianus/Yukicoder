<?php
list($N, $G, $V) = explode(" ", trim(fgets(STDIN)));
$go = floor($N / 5);
printf("%.12f", $go*$G / $V);
echo PHP_EOL;