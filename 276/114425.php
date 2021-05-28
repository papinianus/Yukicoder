<?php
$n = trim(fgets(STDIN));
$rest = ($n * ($n - 1)) / 2;
echo gcd($n, $rest);
echo PHP_EOL;

function gcd($x, $y) {
    if($y == 0) {
        return $x;
    } else {
        return gcd($y, $x % $y);
    }
}