<?php
declare(strict_types=1);
echo implode("", array_map(function(string $c): string{ return ($c === 'I' || $c === 'l') ? '1' : ((strtolower($c) === 'o') ? '0' : $c); }, str_split(trim(fgets(STDIN)))));
echo PHP_EOL;