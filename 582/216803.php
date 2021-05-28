<?php
$n = trim(fgets(STDIN));
$boxes = array_count_values(explode(" ", trim(fgets(STDIN))));
if(isset($boxes[0])) { $n -= $boxes[0]; unset($boxes[0]); }

if($n % 2 === 1) {
    $aVincible = isset($boxes[1]) && (count($boxes) === 1) ;
} else {
    $aVincible = isset($boxes[1]) && isset($boxes[2]) &&  (count($boxes) === 2)  && $boxes["2"] === 1;
}

echo $aVincible ? "A" : "B";
echo PHP_EOL;
