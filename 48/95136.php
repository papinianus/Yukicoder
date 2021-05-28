<?php
$x = trim(fgets(STDIN));
$y = trim(fgets(STDIN));
$l = trim(fgets(STDIN));

$act = 0;

if($y < 0) {
    $act += 2;
} else if ($x != 0) {
    $act++;
}

$act += ceil(abs($x)/$l);
$act += ceil(abs($y)/$l);
echo $act.PHP_EOL;
