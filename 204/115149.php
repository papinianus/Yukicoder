<?php
$days = trim(fgets(STDIN));
$str = "xxxxxxxxxxxxxx";
$str .= trim(fgets(STDIN));
$str .= trim(fgets(STDIN));
$str .= "xxxxxxxxxxxxxx";
$max = getmax($str);
for($i = 0; $i < 29; $i++) {
    $tempStr = $str;
    $j = 0;
    while($tempStr[$i+$j] == "x" && $j < $days) {
        $tempStr[$i+$j] = "o";
        $j++;
    }
    $max = max($max, getmax($tempStr));
}
echo $max;

function getmax($str) {
    $max = 0;
    preg_match_all('/o+/',$str,$matches);
    foreach($matches[0] as $match) {
        $max = max($max, strlen($match));
    }
    return $max;
}