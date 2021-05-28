<?php
$str = trim(fgets(STDIN));
$strlen = strlen($str);
$str .= $str;
$ans = [];
for($i = 0; $i < $strlen; $i++) {
    if(in_array($str[$i],["+","-"],true) || in_array($str[$i+$strlen-1],["+","-"],true) ) {
        continue;
    }
    $formula = substr($str, $i, $strlen);
    $formula = preg_replace('/([+-])0(.+)/','${1}${2}',$formula); //0で始まる数値が8進数になる
    eval('$ans[] = '.$formula.';');
}
echo max($ans);