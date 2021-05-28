<?php
$strs = trim(fgets(STDIN));
$cnt = array_count_values(str_split($strs));
$len = strlen($strs);
$prod = range(1, $len);
$div = [];
foreach($cnt as $i)
{
    while($i > 1) {
        if(($pos = array_search($i, $prod))!==false) {
            unset($prod[$pos]);
        } else {
            $div[] = $i;
        }
        $i--;
    }
}
$ans = array_product($prod);
if(count($div) > 0) {
    $ans /= array_product($div);
}

echo $ans - 1;