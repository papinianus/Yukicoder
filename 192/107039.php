<?php
$num = trim(fgets(STDIN));
if($num%2) {
    $num++;
}
echo $num.PHP_EOL;