<?php
declare(strict_types=1);
define('MOD', 1000000007);

$N = trim(fgets(STDIN));
echo abs(strlen(strval(MOD)) - strlen($N));
echo PHP_EOL;