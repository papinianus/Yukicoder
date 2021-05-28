<?php
$null = trim(fgets(STDIN));
$points = explode(" ", trim(fgets(STDIN)));
$ids = explode(" ", trim(fgets(STDIN)));
$score = array_fill(0, 101, 0);
foreach($ids as $idx => $id) {
    $score[$id] += $points[$idx];
}
if(max($score) == $score[0]) {
    echo 'YES';
} else {
    echo 'NO';
}
echo PHP_EOL;