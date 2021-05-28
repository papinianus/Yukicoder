<?php
$n = str_split(trim(fgets(STDIN)));
$a = [];
$b = [];
foreach($n as $digit) {
    if($digit == 7) {
        $a[] = 1;
        $b[] = 6;
    }
    else {
        $a[] = $digit;
        $b[] = 0;
    }
}
echo implode("", $a)." ";
$formatB = ltrim(implode("", $b), 0);
echo $formatB === "" ? "0" : $formatB;
echo PHP_EOL;
