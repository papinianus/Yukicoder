<?php
$N = trim(fgets(STDIN));
$K = trim(fgets(STDIN));
$i = $N;
$max = 0;
$min = 1000;
while($i) {
    $n = trim(fgets(STDIN));
    if($max < $n) {
        $max = $n;
    }
    if($min > $n) {
        $min = $n;
    }
    $i--;
}
echo $max - $min;
echo PHP_EOL;