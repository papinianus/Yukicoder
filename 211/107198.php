<?php
$primeDice = [2,3,5,7,11,13];
$nonPrimeDice = [4,6,8,9,10,12];
$expect = [];
foreach($primeDice as $prime) {
    foreach($nonPrimeDice as $nonPrime) {
        $idx = $prime * $nonPrime;
        if(!isset($expect[$idx])) {
            $expect[$idx] = 1;
        } else {
            $expect[$idx]++;
        }
    }
}
$num = trim(fgets(STDIN));
if(isset($expect[$num])) {
    printf("%.13f", $expect[$num]/36);
} else {
    printf("%.13f", 0);
}
echo PHP_EOL;