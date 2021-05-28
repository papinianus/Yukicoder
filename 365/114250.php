<?php
$n = trim(fgets(STDIN));
$nums = explode(" ", trim(fgets(STDIN)));
$nums = array_flip($nums);
$tail = $n;
for($n;$n > 0;$n--) {
    $pos = $nums[$n];
    if($pos > $tail) {
        break;
    }
    $tail = $pos;
}
echo $n;
echo PHP_EOL;