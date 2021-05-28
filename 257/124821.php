<?php
list($num, $turn) = explode(" ", trim(fgets(STDIN)));
$turn++;
$mine = ( ($num % $turn) - 1 + $turn) % $turn;
echo $mine;
echo PHP_EOL;
$cur = trim(fgets(STDIN));

while($cur < $num)
{
    $mine += $turn;
    echo $mine;
    echo PHP_EOL;
    flush();
    $cur = trim(fgets(STDIN));
}