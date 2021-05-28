<?php
$null = trim(fgets(STDIN));
$cards = explode(" ", trim(fgets(STDIN)));
$plus = 0;
$minus = 0;
$nums = [];
foreach($cards as $card) {
    if($card=="+") {
        $plus++;
    } else if($card=="-") {
        $minus++;
    } else {
        $nums[] = $card;
    }
}
echo getMax($nums, $plus, $minus)." ".getMin($nums, $plus, $minus).PHP_EOL;

function getMax($nums, $plus, $minus)
{
    sort($nums);
    $form = "";
    while($minus) {
        $num = array_shift($nums);
        $form = " - ".$num.$form;
        $minus--;
    }
    while($plus) {
        $num = array_shift($nums);
        $form = " + ".$num.$form;
        $plus--;
    }
    $form = implode("", array_reverse($nums)).$form;
    eval("\$ans = $form;");
    return $ans;
}
function getMin($nums, $plus, $minus)
{
    $form = "";
    sort($nums);
    if($minus) {
            while($plus) {
                $num = array_shift($nums);
                $form .= $num." + ";
                $plus--;
            }
            while($minus) {
                $num = array_shift($nums);
                $form .= $num." - ";
                $minus--;
            }
            $form .= implode("", array_reverse($nums));
    } else {
        $branches = array_fill(0, $plus+1, 0);
        $i=0;
        while(!is_null(($num = array_shift($nums)))) {
            if($num!=0)$branches[$i] .= (string)$num;
            $i = ($i+1) % ($plus+1);
        }
        $form = implode(" + ",$branches);
    }
    $form = preg_replace("/(\s|^)0+([1-9])/","$2",$form);
    eval("\$ans = $form;");
    return $ans;
}
