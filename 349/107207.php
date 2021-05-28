<?php
$n = trim(fgets(STDIN));
$statue = [];
for($i=0;$i<$n;$i++) {
    $eto = trim(fgets(STDIN));
    if(isset($statue[$eto])) {
        $statue[$eto]++;
    } else {
        $statue[$eto] = 1;
    }
}
if(max($statue) <= ceil($n /2)) {
    echo "YES";
} else {
    echo "NO";
}
echo PHP_EOL;