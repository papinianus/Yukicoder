<?php
$points = explode(" ", trim(fgets(STDIN)));
$max = max($points);
$min = min($points);
unset($points[array_search($max, $points)]);
unset($points[array_search($min, $points)]);
printf("%.2f",array_sum($points)/4);
echo PHP_EOL;