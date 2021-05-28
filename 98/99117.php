<?php
list($x, $y) = explode(' ', trim(fgets(STDIN)));
$z = floor(sqrt($x*$x+$y*$y));
$round_z = round(sqrt($x*$x+$y*$y));
if($z == $round_z) {
    echo $round_z*2+1;
} else {
    echo $round_z*2;
}
echo PHP_EOL;