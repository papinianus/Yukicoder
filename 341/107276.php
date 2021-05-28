<?php
$str = preg_split("//u", trim(fgets(STDIN)));
$len = count($str);
$start = false;
$max = 0;
$cnt = 0;
for($i = 0; $i < $len; $i++) {
    if($str[$i]=="…") {
        if(!$start) { 
            $start = true;
            $cnt = 1;
        } else {
            $cnt++;
        }
    } else {
        if($start) {
            $max = max($max, $cnt);
            $start = false;
            $cnt = 0;
        }
    }
}
if($start) {
    $max = max($max, $cnt);
    $start = false;
    $cnt = 0;
}
echo $max;

echo PHP_EOL;