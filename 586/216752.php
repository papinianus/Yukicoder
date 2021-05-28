<?php
$loss = trim(fgets(STDIN));
$loss += trim(fgets(STDIN));
$n = trim(fgets(STDIN));
while($n) {
    $booking[] = trim(fgets(STDIN));
    $n--;
}
$doubled = 0;
foreach(array_count_values($booking) as $cnt) {
    $doubled += $cnt -1;
}
echo $loss * $doubled;
echo PHP_EOL;