<?php
$alpha = " ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$num = trim(fgets(STDIN));
$str = "";
$str .= $alpha[($num % 26) + 1];
$num = (int)floor($num/26);
while($num) {
    $index = $num % 26;
    $num = (int)floor($num/26);
    if($index == 0) {
        $str .= "Z";
        $num--;
        continue;
    }
    $str .= $alpha[$index];
}
echo strrev($str);
echo PHP_EOL;
