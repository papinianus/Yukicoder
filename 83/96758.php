<?php
$total = trim(fgets(STDIN));
$digits = floor($total/2);
$rest = $total % 2;
$ans = array_fill(0, $digits, 1);
if($rest) {$ans[0] = 7;}
echo implode('', $ans).PHP_EOL;