<?php
declare(strict_types=1);
$N = trim(fgets(STDIN));
echo ltrim(strrev(chunk_split(strrev($N),3,",")),",");
echo PHP_EOL;