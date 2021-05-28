<?php
$age = trim(fgets(STDIN));
$x = $age - 7;
if($x > 7) {
    echo $x;
} else {
    echo -1;
}
echo PHP_EOL;