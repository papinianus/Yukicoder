<?php
$k = trim(fgets(STDIN));
$s = trim(fgets(STDIN));
echo floor((100*$s/(100-$k))).PHP_EOL;