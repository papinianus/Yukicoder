<?php
$str = trim(fgets(STDIN));
$len = strlen($str);
$exists = preg_match_all("/c.*?w.*?w/", $str, $matches);
$min = PHP_INT_MAX;
if($exists) {
    foreach($matches[0] as $match) {
        $min = min($min, strlen($match));
    }
    for($i = 0; $i < $len-2; $i++) {
        $exists = preg_match("/c.*?w.*?w/", substr($str, $i), $matches);
        if($exists) {
            $min = min($min, strlen($matches[0]));
        }
    }
    echo $min;
} else {
    echo -1;
}
echo PHP_EOL;