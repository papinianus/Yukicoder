<?php
list($null, $m) = explode(" ",trim(fgets(STDIN)));
list($x, $y) = explode(" ",trim(fgets(STDIN)));
$x = getClass($x, $m);
$y = getClass($y, $m);

if($x == $y) {
    echo "YES";
} else {
    echo "NO";
}
echo PHP_EOL;

function getClass($x, $all) {
    $x = $x % ($all*2); // 往復を正規化
    if($x == 0) {$x = 1;} // 折り返しの終点が0になるが、これは1組と同等
    if($x > $all) { // 折り返し後の位置を正規化
        $x = $all - (($x % $all) -1);
    }
    return $x;
}