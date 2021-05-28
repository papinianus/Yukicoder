<?php
$numArr = str_split(trim(fgets(STDIN)));
$len = count($numArr);
$sum = array_sum($numArr);
if($numArr[$len-1] >= 5) {
    $numFor5 = (int)(substr(implode('', $numArr),0,$len-1).'5');
} else {
    $numFor5 = (int)(substr(implode('', $numArr),0,$len-1).'0');
}
$numFor3 = (int)(implode('', $numArr))-($sum % 3);

// $num = (int)(trim(fgets(STDIN)));
$of5 = ($numFor5 / 5);
$of3 = ($numFor3 / 3);
// echo $of3.PHP_EOL;
// echo $of5.PHP_EOL;
echo (int)(($of3 + $of5)*2).PHP_EOL;