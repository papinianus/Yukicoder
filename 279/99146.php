<?php
$strs = trim(fgets(STDIN));
$ts = substr_count($strs, 't');
$rs = substr_count($strs, 'r');
$es = (int)(substr_count($strs, 'e')/2);
echo min($ts,$rs,$es).PHP_EOL;