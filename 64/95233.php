<?php
list($f[0], $f[1], $n) = explode(' ',trim(fgets(STDIN)));
$f[2] = ($f[0]*1) ^ ($f[1]*1);
$n %= 3;
echo $f[$n].PHP_EOL;