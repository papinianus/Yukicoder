<?php
$null = trim(fgets(STDIN));
$nums = explode(" ", trim(fgets(STDIN)));
$ans = 0;
foreach($nums as $num) {
    if($num%2) {
        $ans++;
    } else {
        $ans--;
    }
}
echo abs($ans).PHP_EOL;