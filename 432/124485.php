<?php
$t = trim(fgets(STDIN));
for(;$t;$t--)
{
    $nums = str_split(trim(fgets(STDIN)));
    $size = count($nums);
    $val = getTreedSum($nums, $size);
    echo $val.PHP_EOL;
}

function getTreedSum($array, $size)
{
    if($size === 1)
    {
        return $array[0];
    }
    else
    {
        $new = [];
        for($i = 1; $i < $size; $i++)
        {
            $new[$i-1] = singleDigit($array[$i-1], $array[$i]);
        }
        return getTreedSum($new, $size - 1);
    }
}
function singleDigit($a, $b)
{
    $sum = $a + $b;
    while($sum > 9)
    {
        $sum = $sum % 10 + floor($sum / 10);
    }
    return $sum;
}
