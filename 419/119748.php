<?php
list($x, $y) = explode(" ", trim(fgets(STDIN)));
if($x == $y)
{
    $a = sqrt($x * $x * 2);
}
else
{
    $c = max($x, $y);
    $b = min($x, $y);
    $a = sqrt($c * $c - $b * $b);
}
printf("%.6f\n",$a);