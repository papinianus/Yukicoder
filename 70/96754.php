<?php
$count = trim(fgets(STDIN));
$sum = 0;
for($i = 1; $i <= $count; $i++) {
    list($start, $end) = explode(' ', trim(fgets(STDIN)));
    list($start_h, $start_m) = explode(':', $start);
    list($end_h, $end_m) = explode(':', $end);
    if($end_m < $start_m) {$end_m += 60;$end_h--;}
    if($end_h < $start_h) {$end_h += 24;}
    $sum += (($end_h - $start_h) * 60) + ($end_m - $start_m);
}
echo $sum.PHP_EOL;