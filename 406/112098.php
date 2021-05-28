<?php
$n = trim(fgets(STDIN));
$birds = explode(" ", trim(fgets(STDIN)));
$flag = false;
$diff = 0;
if(count(array_unique($birds)) == $n) {
    $flag = true;
    rsort($birds);
    $prev = array_shift($birds);
    foreach($birds as $bird) {
        if(($diff == 0 ) || ($prev - $bird) == $diff) {
            $diff = $prev - $bird;
            $prev = $bird;
        } else {
            $flag = false;
            break;
        }
    }
}
echo ($flag)?"YES":"NO";
echo PHP_EOL;