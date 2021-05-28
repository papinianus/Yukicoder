<?php
$n = trim(fgets(STDIN));
for($i=0; $i<$n; $i++) {
    $j= $i+1;
    if(($j%3) && ($j%5)) {
        echo $j.PHP_EOL;
    } else if($j%3) {
        echo 'Buzz'.PHP_EOL;
    } else if($j%5) {
        echo 'Fizz'.PHP_EOL;
    } else {
        echo 'FizzBuzz'.PHP_EOL;
    }
}