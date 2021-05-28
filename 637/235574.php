<?php
$nums = explode(" ",trim(fgets(STDIN)));
$ans = "";
foreach($nums as $num) {
    if($num % 3 == 0) { $ans .= "fizz"; }
    if($num % 5 == 0) { $ans .= "buzz"; }
    if($num % 3 != 0 && $num % 5 != 0) { $ans .= $num; }
}
echo strlen($ans).PHP_EOL;