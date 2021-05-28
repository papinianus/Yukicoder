<?php
$null = trim(fgets(STDIN));
$nums = explode(" ",trim(fgets(STDIN)));
$counts = array_count_values($nums);
echo count(array_keys($counts,1));
echo PHP_EOL;