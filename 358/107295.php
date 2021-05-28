<?php
$bamboos = explode(" ", trim(fgets(STDIN)));
if(iskadomatsu($bamboos)) {
    echo "INF";
} else {
    $ans = 0;
    if(count(array_unique($bamboos)) == 3) {
        $max = max($bamboos);
        for($i = 2; $i <= $max; $i++) {
            if(isKadomatsu([$bamboos[0]%$i, $bamboos[1]%$i, $bamboos[2]%$i])) {
                $ans++;
            }
        }
    }
    echo $ans;
}
echo PHP_EOL;

function isKadomatsu($arr) {
    if(count(array_unique($arr)) == 3) {
        if(array_keys($arr, max($arr))[0] == 1 || array_keys($arr, min($arr))[0] == 1 ) {
            return true;
        }
    }
    return false;
}