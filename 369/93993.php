<?php
$n = trim(fgets(STDIN));
$sum = array_sum(explode(' ', trim(fgets(STDIN))));
$n = trim(fgets(STDIN));
echo ($sum - $n).PHP_EOL;