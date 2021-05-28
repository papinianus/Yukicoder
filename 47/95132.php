<?php
$dec = trim(fgets(STDIN));
$bin = decbin($dec);
if(preg_match('/^1[0]*$/', $bin)) {
    $bin--;
}
if($dec == 0 || $dec == 1) {
    echo 0;
} else {
    echo strlen($bin);
}
echo PHP_EOL;