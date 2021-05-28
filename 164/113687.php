<?php
$alpha = "0123456789abcdefghijklmnopqrstuvwxyz";
$n = trim(fgets(STDIN));
$min = gmp_init("0");
for(; $n; $n--) {
    $str = str_split(trim(fgets(STDIN)));
    $std = stripos($alpha, max($str))+1;
    $tmp = arrayToInt($str, $std, $min);
    if(gmp_cmp($min, 0) == 0 || gmp_cmp($tmp, $min) < 0) {$min = $tmp;}
}
echo gmp_strval($min).PHP_EOL;

function arrayToInt($array, $std = 2, $cut) {
    global $alpha;
    $val = 0;
    $base = 1;
    while(!is_null($char = array_pop($array))) {
        $val = gmp_add(gmp_mul(stripos($alpha,$char),$base), $val);
        $base = gmp_mul($base,$std);
    }
    return $val;
}
