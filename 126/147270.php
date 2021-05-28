<?php
list($a, $b, $s) = explode(" ", trim(fgets(STDIN)));

if(a_callable($a, $b, $s))
{
    echo cost($a, $s);
} else {
    $path1 = transit($b, $s, 1, $a);
    if($a != 0) {
        $path2 = transit($b, $s, $a, $a);
        $path1 = min($path1, $path2);
    }
    echo $path1;
}
echo PHP_EOL;

function a_callable($a, $b, $s) {
    if($s == 1) { return true; }
    $patha = abs($s - $a);
    $pathb = abs($s - $b);
    if($patha <= $pathb) {
        return true;
    }
    return false;
}

function cost($a, $s) {
    return abs($s - $a) + $s;
}

function transit($a, $s, $p, $p_prev) {
    return abs($s - $a) + abs($s - $p) + cost($p_prev, $p);
}