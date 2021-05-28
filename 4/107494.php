<?php
$num = trim(fgets(STDIN));
$nums = explode(" ", trim(fgets(STDIN)));
$sum = array_sum($nums);
if($sum%2 == 0) {
    $halfSum = $sum/2;
    $memo = [];
    rsort($nums);
    echo getCombination($halfSum,0)?"possible":"impossible";
} else {
    echo "impossible";
}
echo PHP_EOL;

function getCombination($target, $index) {
    global $nums;
    global $memo;
    if(!isset($memo[$target][$index])) {
        if($index >= count($nums)) {
            $memo[$target][$index] = false;
        } else if(array_sum(array_slice($nums,$index)) < $target) {
            $memo[$target][$index] = false;
        } else if($nums[$index] == $target) {
            $memo[$target][$index] = true;
        } else if($target > $nums[$index]) {
            $memo[$target][$index] = !getCombination($target-$nums[$index], $index+1)?getCombination($target, $index+1):true;
        } else {
            $memo[$target][$index] = getCombination($target, $index+1);
        }
    }
    return $memo[$target][$index];
}