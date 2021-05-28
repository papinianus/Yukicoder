<?php
$base = explode('.', trim(fgets(STDIN)));
$target = explode('.', trim(fgets(STDIN)));
for($i = 0; $i < 3; $i++) {
    if($base[$i] < $target[$i]) {
        echo 'NO';
        break;
    } if($base[$i] > $target[$i] || ($i == 2)) {
        echo 'YES';
        break;
    }
}
echo PHP_EOL;