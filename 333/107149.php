<?php
list($left, $center) = explode(" ",trim(fgets(STDIN)));
$max = "2000000000";

if($left > $center) {
    $right = $max - $center - 1;
} else {
    $right = $center - 1 - 1;
}
echo $right;
echo PHP_EOL;