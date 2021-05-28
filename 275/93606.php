<?php
$n = trim(fgets(STDIN));
$floorn = floor($n/2);
$nums = explode(' ', trim(fgets(STDIN)));
sort($nums);

if(($n / 2) != $floorn){
    echo $nums[$floorn].PHP_EOL;
} else {
    echo (($nums[$floorn] + $nums[$floorn-1]) /2).PHP_EOL;
}