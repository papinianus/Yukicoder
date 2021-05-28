<?php
list($null, $m) = explode(" ",trim(fgets(STDIN)));
list($x, $y) = explode(" ",trim(fgets(STDIN)));
$x = getClass($x-1, $m); //modのためにマイナス
$y = getClass($y-1, $m);

if($x == $y) {
    echo "YES";
} else {
    echo "NO";
}
echo PHP_EOL;

function getClass($x, $all) {
    $x = $x % ($all*2); // 往復を正規化
    if($x >= $all) { // 折り返し後の位置を正規化　-1しているので$all以降が折り返し
        $x = $all -1 - ($x % $all); //$all - 1が右端、そこから何組戻るか
    }
    return $x;
}