<?php
list($n, $k) = explode(" ", trim(fgets(STDIN)));
if($k == 0 || $k > $n) {
    echo "0".PHP_EOL;
    exit;
}
if(($n % 2) == 0) {
    echo ($n-2).PHP_EOL;
    exit;
}
if($k == ($n + 1) / 2) {
    echo ($n-1).PHP_EOL;
    exit;
}
echo ($n-2).PHP_EOL;