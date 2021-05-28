<?php
$nums = explode(" ", trim(fgets(STDIN)));
$diff = array_diff(range(1, 10), $nums);
echo array_pop($diff);
echo PHP_EOL;