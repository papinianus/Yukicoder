<?php
$num = trim(fgets(STDIN));
$root = floor(sqrt($num));
$ans = 0;
for($i = 3;$i <= $root; $i++)
{
    if(!($num % $i))
    {
        $ans = $i;
        break;
    }
}
if($ans == 0)
{
    if($num % 2)
    {
        echo $num;
    }
    else
    {
        echo ($num == 4)?4:$num / 2;
    }
}
else {
    echo $ans;
}
echo PHP_EOL;