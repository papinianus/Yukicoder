<?php
list($a, $b) = explode(" ", trim(fgets(STDIN)));
if(($b % $a) == 0) {
    echo $b / $a;
} else {
    echo "NO";
}
echo PHP_EOL;