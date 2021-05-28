<?php
$range_E = pow(10, 9);
$range_S = 1;
$judge = [];
$judge[1] = 1;
$std = [[2,1],[0,1]];
while(true) {
    $point = ceil(($range_S+$range_E)/2);
    if($judge[$point] = ask($point)) {
        $range_S = ($point==$range_E)?$point-1:$point;
    } else {
        $range_E = (($point-1)==$range_S)?$point:$point-1;
    }
    if(($range_E - $range_S)==1) {
        break;
    }
}
if(!isset($judge[$range_S])) {
    $judge[$range_S] = ask($range_S);
}
if(!isset($judge[$range_E])) {
    $judge[$range_E] = ask($range_E);
}
printf("! %d\n", $range_S+$std[$judge[$range_S]][$judge[$range_E]]);
flush();

function ask($num) {
    printf("? %d\n",$num);
    flush();
    return trim(fgets(STDIN));
}