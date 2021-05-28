<?php
$N = trim(fgets(STDIN));
for($i = 0; $i < $N; $i++) {
    list($num, $turn) = explode(" ", trim(fgets(STDIN)));
    if($num%($turn+1) === 1) {
        echo "Lose";
    } else {
        echo "Win";
    }
    echo PHP_EOL;
}