<?php
$work = trim(fgets(STDIN));
$days = trim(fgets(STDIN));
$startday = floor(sqrt($work));
if($days <= $startday) {
    $startday = $days;
}
for($i = $startday; $i > 1; $i--) {
    $work -= floor($work/($i*$i));
}
echo $work.PHP_EOL;