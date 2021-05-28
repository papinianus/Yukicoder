<?php
list($a, $b) = explode(" ", trim(fgets(STDIN)));
if($a >= $b) { echo "S";}
else         { echo "K";}

echo PHP_EOL;