<?php
list($n, $d) = explode(" ", trim(fgets(STDIN)));
if($d <= $n) {
    $str = str_repeat("A",$d).str_repeat("C", $n-$d);
} else {
    $str = str_repeat("A",2*$n-$d).str_repeat("B", $d-$n);
}
echo $str.PHP_EOL;