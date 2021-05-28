<?php
list($a, $b) = explode(" ", trim(fgets(STDIN)));
if(strlen($a) > 1 && strlen($b) > 1)
{
    $ans = 'P';
}
else if(strlen($a) > 1)
{
    $ans = judge($b);
}
else if(strlen($b) > 1)
{
    $ans = judge($a);
}
else
{
    $p = $a * $b;
    $s = $a + $b;
    if($p > $s)
    {
        $ans = 'P';
    }
    else if ($p < $s)
    {
        $ans = 'S';
    }
    else
    {
        $ans = 'E';
    }
}
echo $ans.PHP_EOL;

function judge($num)
{
    if($num < 2)
    {
        return 'S';
    }
    else
    {
        return 'P';
    }
}