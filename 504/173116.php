<?php
$n = trim(fgets((STDIN)));
$nums = [];
$cur = 1;
$k = trim(fgets((STDIN)));
echo $cur.PHP_EOL;
for($i = 1; $i < $n; $i++) {
    $num = trim(fgets((STDIN)));
    if($num > $k)
    {
        $cur++;
    }
    echo $cur.PHP_EOL;
}
