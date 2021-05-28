<?php
list($hei, $wid, $num, $k) = explode(' ', trim(fgets(STDIN)));
if(($hei*$wid) % $num == $k % $num) {
    echo 'YES';
} else {
    echo 'NO';
}
echo PHP_EOL;