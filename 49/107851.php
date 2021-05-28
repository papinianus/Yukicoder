<?php
$exp = str_split(trim(fgets(STDIN))."*");
$ans = 0;
$sign = "*"; //左から計算するので、初項は0+123とみなせる。
$operand = "";
while(($char = array_shift($exp)) !== NULL) {
    if($char != '*' && $char != '+') {
        $operand .= $char;
    } else {
        switch($sign) {
            case '*':
                $ans += $operand;
                break;
            case '+':
                $ans *= $operand;
                break;
        }
        $sign = $char;
        $operand = "";
    }
}
echo $ans;
echo PHP_EOL;