<?php
list($n, $m) = explode(" ", trim(fgets(STDIN)));
$boxes = explode(" ", trim(fgets(STDIN)));
sort($boxes);
$empty = 0;
foreach($boxes as $box) {
    if($box <= $m) {
        $m -= $box;
        $empty++;
    } else {
        break;
    }
}
echo $empty.PHP_EOL;