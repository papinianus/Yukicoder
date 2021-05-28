<?php
list($p, $q) = explode(" ", trim(fgets(STDIN)));
//裏→表(刺さる)
$P1 = (1 - $p)*$q;
// 表(刺さらない)→裏→表(刺さる)
$P2 = $p*(1-$q)*$q;
if($P1 < $P2) {
    echo 'YES';
} else {
    echo 'NO';
}
echo PHP_EOL;