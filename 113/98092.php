<?php
$route = trim(fgets(STDIN));
$across = diffWay($route, 'E','W');
$down = diffWay($route, 'N','S');
$distance = sqrt($across*$across + $down*$down);
echo $distance.PHP_EOL;

function diffWay($path, $one, $another) {
    $one_c = substr_count($path, $one);
    $ano_c = substr_count($path, $another);
    return abs($one_c - $ano_c);
}
