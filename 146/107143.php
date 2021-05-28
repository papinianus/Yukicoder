<?php
$g_lim = "1000000007";
$n = trim(fgets(STDIN));
$g_ans = "0";
for($i = 0; $i < $n; $i++) {
    $flg = false;
    list($desk, $cnt) = explode(" ", trim(fgets(STDIN)));
    if($desk[strlen($desk)-1] % 2) {
        $flg = true;
    }
    if($flg) {
        $g_desk = gmp_add($desk, 1);
    } else {
        $g_desk = gmp_init($desk);
    }
    $g_cnt = gmp_mod($cnt, $g_lim);
    $g_desk = gmp_mod(gmp_div_q($g_desk, "2"), $g_lim);
    $g_ans = gmp_add($g_ans, gmp_mod(gmp_mul($g_desk, $g_cnt), $g_lim));
    $g_ans = gmp_mod($g_ans, $g_lim);
}
echo gmp_strval($g_ans);
echo PHP_EOL;