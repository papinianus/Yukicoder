<?php
$n = trim(fgets(STDIN));
$pos = 0;
while($n) {
    $next = trim(fgets(STDIN));
    $distance = abs($pos - $next);
    if($distance != 1) { echo "F".PHP_EOL; exit; }
    $pos = $next;
    $n--;
}
echo "T".PHP_EOL;