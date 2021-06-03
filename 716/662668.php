<?php
declare(strict_types=1);
$N = trim(fgets(STDIN));
$an = array_map(fn($e)=>intval($e), explode(" ", trim(fgets(STDIN))));
$min = min(array_map(fn($e) => (int)abs($e[0] - $e[1]),array_map(null, array_slice($an, 1),array_slice($an,0,$N -1))));
$max = (int)abs($an[$N-1] - $an[0]);
echo $min.PHP_EOL.$max.PHP_EOL;