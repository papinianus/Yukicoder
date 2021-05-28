<?php
list($len, $stroke) = explode(' ',trim(fgets(STDIN)));
$times  = floor(($len-1) / (2*$stroke));
echo ($times*$stroke).PHP_EOL;