<?php
$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));
$c = trim(fgets(STDIN));

$normal = ceil($a/$b);
$extend = ceil($a/$c);

if($extend/$normal <= 2/3) {
    echo 'YES';
} else {
    echo 'NO';
}
echo PHP_EOL;