<?php
$n = trim(fgets(STDIN));
list($b, $sum) = explode(' ', trim(fgets(STDIN)));
$n--;
$ans = $sum - $b;
if(abs($ans) == $ans && $ans != 0) {
    $flg = true;
} else {
    $flg = false;
}
while($n && $flg) {
    list($b, $sum) = explode(' ', trim(fgets(STDIN)));
    $n--;
    if($ans != ($sum - $b)) {
        $flg = false;
    }
}
echo (($flg)?$ans:-1).PHP_EOL;