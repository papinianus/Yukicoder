<?php
list($n, $k, $x) = explode(" ",trim(fgets(STDIN)));
$start = range(1, $n);
$manipulate = [];
for($i = $k;$i;$i--)
{
    $manipulate[] = explode(" ",trim(fgets(STDIN)));
}
$goal = explode(" ",trim(fgets(STDIN)));
$start = exchange($start, array_slice($manipulate,0,$x - 1));
$goal = exchange($goal, array_reverse(array_slice($manipulate,$x)));

$diff = diff($start, $goal);
sort($diff);
echo (implode(" ",$diff)).PHP_EOL;

function exchange($base, $acts)
{
    foreach($acts as $act)
    {
        $a = $act[0]-1; //num to index
        $b = $act[1]-1; //num to index
        $tmp = $base[$b];
        $base[$b] = $base[$a];
        $base[$a] = $tmp;
    }
    return $base;
}

function diff($a, $b)
{
    $res=[];
    $len = count($a);
    for($i=0;$i < $len;$i++)
    {
        if($a[$i] != $b[$i])
        {
            $res[] = $i+1; //index to num
        }
    }
    return $res;
}