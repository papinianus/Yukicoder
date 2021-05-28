<?php
list($a,$b) = explode(' ', trim(fgets(STDIN)));
$diff = $b - $a;
if($diff > 0) {
    echo "+";
}
echo $diff.PHP_EOL;