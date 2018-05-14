<?php
declare(strict_types=1);
define('MOD', 1000000007);
[$a, $b] = explode(" ", trim(fgets(STDIN)));
echo (($a % MOD) * ($b % MOD)) % MOD;
echo PHP_EOL;