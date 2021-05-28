<?php
$len = trim(fgets(STDIN));
$stops = trim(fgets(STDIN));
$null = trim(fgets(STDIN));
echo pow(2, $len - 3)*$stops;
echo PHP_EOL;