<?php
declare(strict_types=1);
[$n,$m] = explode(" ", trim(fgets(STDIN)));
$needle = "LOVE";
while($n) {
    $hasLove = strpos(trim(fgets(STDIN)),$needle);
    if($hasLove !== false) {
        echo "YES".PHP_EOL;
        exit;
    }
    $n--;
}
echo "NO".PHP_EOL;