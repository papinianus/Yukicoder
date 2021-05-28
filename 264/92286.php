<?php
list($x, $y) = explode(" ", trim(fgets(STDIN)));
if($x == $y) {
    echo "Drew".PHP_EOL;
} else {
    switch($x.$y) {
        case "01":
        case "12":
        case "20":
            echo "Won".PHP_EOL;
            break;
        default:
            echo "Lost".PHP_EOL;
            break;
    }
}