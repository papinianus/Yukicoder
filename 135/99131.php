<?php
$n = trim(fgets(STDIN));
$vals = explode(' ', trim(fgets(STDIN)));
sort($vals);
$vals = array_unique($vals);
if(count($vals) > 1) {
    $min = array_reduce(
        $vals,
        function($ans, $item){
            if(is_null($ans[0])) {
                $ans[0] = $item;
            } else {
                $ans[1] = min($ans[1],$item-$ans[0]);
                $ans[0] = $item;
            }
            return $ans;
        },
        [null,1000000]);
    echo $min[1];
} else {
    echo 0;
}
echo PHP_EOL;