<?php
list($x, $y) = explode(" ", trim(fgets(STDIN)));
for($i = $x; $i<=$y; $i++) {
    if(($i % 3) === 0 || (strpos($i, "3") !== false)) {
        echo $i.PHP_EOL;
    }
}