<?php
$N = trim(fgets(STDIN));
$char = $N;
while($N) {
    for($i = $N; $i > 0; $i--) {
        echo $char;
    }
    echo PHP_EOL;
    $N--;
}