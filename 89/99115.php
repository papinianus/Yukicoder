<?php
$pai = 3.14159265358979323846;
$cal = trim(fgets(STDIN));
list($r_in, $r_out) = explode(' ', trim(fgets(STDIN)));
$r = ($r_out-$r_in) / 2;
$circle = $pai*$r*$r;
$move = $pai*($r_out+$r_in);
echo ($circle*$move*$cal).PHP_EOL;