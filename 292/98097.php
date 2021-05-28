<?php
list($name, $t, $u) = explode(' ',trim(fgets(STDIN)));
$name = str_split($name);
unset($name[$t]);
unset($name[$u]);
echo implode('', $name).PHP_EOL;