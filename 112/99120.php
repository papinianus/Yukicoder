<?php
$num = trim(fgets(STDIN));
$counts = explode(' ', trim(fgets(STDIN)));
$totalLeg = array_sum($counts)/($num-1);
$ifAllBird = 2*$num;
$turtles = ($totalLeg - $ifAllBird)/2;
$birds = $num - $turtles;
echo "{$birds} {$turtles}".PHP_EOL;