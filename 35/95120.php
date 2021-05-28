<?php
$count = trim(fgets(STDIN));
$suc = 0;
$fai = 0;
while($count) {
    list($limit, $str) = explode(' ', trim(fgets(STDIN)));
    $max = floor(12*$limit/1000);
    $len = strlen($str);
    if($max >= $len) {
        $suc += $len;
    } else {
        $suc += $max;
        $fai += $len-$max;
    }
    $count--;
}
echo $suc.' '.$fai.PHP_EOL;