<?php
$str = trim(fgets(STDIN));
$len = strlen($str);
$ctodel = strpos($str, 'w') - 1;
$wtodel = $len - strrpos($str, 'c') - 1;
echo min($ctodel, $wtodel);
echo PHP_EOL;
