<?php
list($v, $t) = explode(" ", trim(fgets(STDIN)));
$v *= 10000;
$d = $v * $t;
if(strlen($d) < 5) { echo 0; }
else { echo substr($v * $t, 0, -4); }
echo PHP_EOL;