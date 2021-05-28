<?php
$digit = [0,1,2,3,4,5,6,7,8,9];
$trial = array_fill(0, 10, 0);
$pos = 0;

echo implode("", $trial).PHP_EOL;
flush();
list($prev, $stat) = explode(" ", trim(fgets(STDIN)));
$trial[$pos] = ($trial[$pos] + 1) % 10;
while($stat == "locked" && $pos < 10) {
    echo implode("", $trial).PHP_EOL;
    flush();
    list($n, $stat) = explode(" ", trim(fgets(STDIN)));
    if($n > $prev) {
        $pos++;
        $prev = $n;
    } else if ($prev > $n) {
        $trial[$pos] = ($trial[$pos] + 9) % 10;
        $pos++;
    } else {
        $prev = $n;
    }
    $trial[$pos] = ($trial[$pos] + 1) % 10;
}