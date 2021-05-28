<?php
list($ringCnt, $step) = explode(" ", trim(fgets(STDIN)));
$gcd = gcd($ringCnt, $step);
$move = $ringCnt/$gcd - 1;
echo $move.PHP_EOL;

function gcd($x, $y) {
    if($y == 0) {
        return $x;
    } else {
        return gcd($y, $x % $y);
    }
}