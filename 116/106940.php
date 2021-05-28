<?php
$null = trim(fgets(STDIN));
$bamboos = explode(" ", trim(fgets(STDIN)));
$size = count($bamboos);
$ans = 0;
for($i = 0; $i < $size-2; $i++) {
    if(isKadomatsu(array_slice($bamboos, $i, 3))) {
        $ans++;
    }
}
echo $ans;
echo PHP_EOL;

function isKadomatsu($arr) {
    if(count(array_unique($arr)) == 3) {
        if(array_keys($arr, max($arr))[0] == 1 || array_keys($arr, min($arr))[0] == 1 ) {
            return true;
        }
    }
    return false;
}