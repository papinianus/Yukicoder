<?php
$guys["A"] = trim(fgets(STDIN));
$guys["B"] = trim(fgets(STDIN));
$guys["C"] = trim(fgets(STDIN));

arsort($guys);
echo implode(PHP_EOL, array_keys($guys));
echo PHP_EOL;