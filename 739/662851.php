<?php
declare(strict_types=1);
$S = trim(fgets(STDIN));
echo isRepeated($S) ? "YES" : "NO";
echo PHP_EOL;

function isRepeated(string $str):bool {
    $len = strlen($str);
    if($len % 2 !== 0) return false;
    return substr($str,0,$len / 2) === substr($str,$len/2);
}