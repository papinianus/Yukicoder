<?php
list($v1, $v2) = explode(' ',trim(fgets(STDIN)));
$dist = trim(fgets(STDIN));
$veloc = trim(fgets(STDIN));
$time = $dist / ($v1 + $v2);
echo $veloc * $time;
echo PHP_EOL;