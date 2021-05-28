<?php
$null = trim(fgets(STDIN));// Here your code !
$votes = explode(' ',trim(fgets(STDIN)));
$border = array_sum($votes) / 10;
$count = 0;
foreach($votes as $vote) {
    if($vote <= $border) {
        $count++;
    }
}
echo $count*30;
echo PHP_EOL;