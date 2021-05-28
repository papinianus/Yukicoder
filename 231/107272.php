<?php
$n = trim(fgets(STDIN));
$dig = 0;
for($i = 0; $i < $n ; $i++) {
    list($exp, $death) = explode(" ", trim(fgets(STDIN)));
    $gain = $exp - $death*30000;
    if($gain >= 500000) {
        $dig = $i+1;
        break;
    }
}
if($dig) {
    echo "YES".PHP_EOL;
    echo $dig.PHP_EOL;
    echo $dig.PHP_EOL;
    echo $dig.PHP_EOL;
    echo $dig.PHP_EOL;
    echo $dig.PHP_EOL;
    echo $dig.PHP_EOL;
} else {
    echo "NO".PHP_EOL;
}