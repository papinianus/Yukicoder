<?php
echo array_sum(array_map(function(string $c): int{ return ($c === '0') ? 10 : strval($c); }, str_split(trim(fgets(STDIN)))));
echo PHP_EOL;