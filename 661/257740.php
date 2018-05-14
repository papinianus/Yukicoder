<?php
declare(strict_types=1);
$n = trim(fgets(STDIN));
while($n) {
    echo ToKittyStr(intval(trim(fgets(STDIN))));
    echo PHP_EOL;
    $n--;
}

function ToKittyStr(int $n) : string {
    if($n % 8 === 0 && $n % 10 === 0) {
        return "ikisugi";
    }
    if($n % 8 === 0) {
        return "iki";
    }
    if($n % 10 === 0) {
        return "sugi";
    }
    return strval(floor($n/3));
}