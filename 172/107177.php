<?php
list($x, $y, $r) = explode(" ", trim(fgets(STDIN)));
echo abs($x)+abs($y)+ceil($r*1.4142);
echo PHP_EOL;