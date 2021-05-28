<?php
$wc = trim(fgets(STDIN));
$hc = trim(fgets(STDIN));
$n = trim(fgets(STDIN));
$ws = [];
$hs = [];
$sum = 0;
for(;$n;$n--)
{
    list($w, $h) = explode(" ", trim(fgets(STDIN)));
    $ws[$w][] = $h;
    $hs[] = $h;
}
foreach($ws as $wnumarr)
{
    $sum += $hc - count(array_unique($wnumarr));
}
$sum += ($wc - count($ws)) * count(array_unique($hs));
echo $sum;
echo PHP_EOL;