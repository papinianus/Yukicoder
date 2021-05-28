<?php
list($n, $m) = explode(" ", trim(fgets(STDIN)));

if($n <= $m) { //定員に対して乗客が十分少ない
    echo "1".PHP_EOL;
    exit;
}
if(($n % 2) === 1) { //n奇数のとき無理
    echo "-1".PHP_EOL;
    exit;
}
if(($n / 2) > $m) { //2日で運べない
    echo "-1".PHP_EOL;
    exit;
}
echo "2".PHP_EOL; //1つとばしで2日で運べる
