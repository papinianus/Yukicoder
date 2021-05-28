<?php
$nums = str_split(trim(fgets(STDIN)));
$len = count($nums);
for($i = 0; $i < $len; $i++) {
    $cur = $nums[$i];
    $max = max(array_slice($nums,$i));
    if($cur < $max) {
        $maxes = array_keys($nums, $max);
        $nums[$i] = $max;
        $nums[$maxes[count($maxes)-1]] = $cur;
        break;
    }
}
echo implode("", $nums);
echo PHP_EOL;