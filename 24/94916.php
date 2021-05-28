<?php
$base = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9,];
$count = trim(fgets(STDIN));
for($i = 0; $i < $count ; $i++) {
    $nums = explode(' ', trim(fgets(STDIN)));
    $y_or_n = array_pop($nums);
    if($y_or_n == 'YES') {
        $base = array_intersect($base, $nums);
    } else if ($y_or_n == 'NO') {
        $base = array_diff($base, $nums);
    }
}
foreach($base as $val) {
    echo $val.PHP_EOL;
}
