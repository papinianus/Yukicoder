<?php
list($a, $b, $c, $d) = explode(' ', trim(fgets(STDIN)));
$a %= $d;
$b %= $d;
$c %= $d;
$temp = ($a*$b)%$d;
echo (($temp*$c)%$d).PHP_EOL;