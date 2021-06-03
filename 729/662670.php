<?php
declare(strict_types=1);
$S = str_split(trim(fgets(STDIN)));
[$i,$j] = array_map(fn($e)=>intval($e), explode(" ", trim(fgets(STDIN))));
$converted = [];
foreach ($S as $pos => $char) {
    $converted[] = ($pos === $i) ? $S[$j] : (($pos === $j) ? $S[$i] : $char);
}
echo implode("", $converted);
echo PHP_EOL;
