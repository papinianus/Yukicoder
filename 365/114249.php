<?php
$n = trim(fgets(STDIN));
$nums = explode(" ", trim(fgets(STDIN)));
$tail = $n;
for($n--;$n>=0;$n--) {
    if($nums[$n] == $tail) {
        $tail--;
    }
}
echo $tail;
echo PHP_EOL;