<?php
declare(strict_types=1);
$N = trim(fgets(STDIN));
$half = floor($N /2);
$rest = $N - $half;
echo "{$half} {$rest}".PHP_EOL;