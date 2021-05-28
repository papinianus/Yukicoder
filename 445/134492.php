<?php
list($n, $k) = explode(" ", trim(fgets(STDIN)));
$ans = floor(50* $n + (50 * $n / (0.8 + 0.2 * $k)));
echo $ans.PHP_EOL;