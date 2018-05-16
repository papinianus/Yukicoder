<?php
declare(strict_types=1);
$a = trim(fgets(STDIN));
echo (floor(($a / 10 * 6) / 60) + 10).':'.str_pad(strval(($a / 10 * 6) % 60), 2, '0', STR_PAD_LEFT);
echo PHP_EOL;