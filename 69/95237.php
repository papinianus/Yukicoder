<?php
$base = str_split(trim(fgets(STDIN)));
sort($base);
$target = str_split(trim(fgets(STDIN)));
sort($target);
if($base == $target) {
    echo 'YES';
} else {
    echo 'NO';
}
echo PHP_EOL;