<?php
list($a, $b, $x, $y) = explode(' ',trim(fgets(STDIN)));
$yOfx = ($b/$a)*$x;
$xOfy = ($a/$b)*$y;
if($yOfx <= $y) {
    $sum = $x + $yOfx;
} else {
    $sum = $y + $xOfy;
}
echo $sum.PHP_EOL;