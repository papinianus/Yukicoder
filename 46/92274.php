<?php
list($x, $y) = explode(" ", trim(fgets(STDIN)));
$z = (float)$y/$x;
echo ceil($z);