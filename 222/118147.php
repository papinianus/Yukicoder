<?php
$str = trim(fgets(STDIN));
$pattern = "/([+-]?[0-9]+)([+-])([+-]?[0-9]+)/";
preg_match_all($pattern, $str, $matches);
$first = getval($matches[1][0]);
$second = getval($matches[3][0]);
if($matches[2][0] == "+")
{
    $ans = $first - $second;
}
else {
    $ans = $first + $second;
}

echo $ans.PHP_EOL;

function getval($str)
{
    $minus = false;
    $index = 0;
    if($str[0] == "+")
    {
        $index = 1;
    }
    if($str[0] == "-")
    {
        $index = 1;
        $minus = true;
    }
    $temp = strval(substr($str, $index));
    return ($minus)?(-$temp):$temp;
}
