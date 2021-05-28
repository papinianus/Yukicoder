<?php
list($a, $b, $s) = explode(" ", trim(fgets(STDIN)));

if(a_callable($a, $b, $s))
{
    echo cost($a, $s);
} else {
    $path1 = transit($b, $s, 1, $a);
    if($a != 0) { //$aが地下のとき、$aを経由することは不可能
        $path2 = transit($b, $s, $a, $a); //$aの初期位置を経由するということは、$aまで移動して、$aにあるかごを利用した乗り換えと同じ
        $path1 = min($path1, $path2);
    }
    echo $path1;
}
echo PHP_EOL;

function a_callable($a, $b, $s) {
    if($s == 1) { return true; } // 1階で下を押すと必ずAが呼べる
    $patha = abs($s - $a);
    $pathb = abs($s - $b);
    if($patha <= $pathb) { // Aのほうが近い
        return true;
    }
    return false;
}

function cost($a, $s) { //$sの位置にいる人が$aのかごを呼んで、0階まで行くコスト
    return abs($s - $a) + $s;
}

function transit($a, $s, $p, $p_prev) { //$sの位置にいる人が、$aのかごを呼んで、$pを経由して、0階まで行くコスト。$pでのりかえるかごは、$p_prevにいる
    return abs($s - $a) + abs($s - $p) + cost($p_prev, $p); // $s -> $pまでの移動 + $pにいる人が$p_prevにあるかごを呼んで0階まで行くコスト
}

