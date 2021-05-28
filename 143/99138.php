<?php
list($k, $n, $f) = explode(' ', trim(fgets(STDIN)));
$ages = explode(' ', trim(fgets(STDIN)));
$beans = $k*$n;
$age = array_sum($ages);
echo ((($beans - $age) >= 0)?($beans - $age):-1);
echo PHP_EOL;