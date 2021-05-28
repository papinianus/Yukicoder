<?php
$num = trim(fgets(STDIN));
if(($num % 2)==0)
{
    echo "2 ".($num/2).PHP_EOL;
}
else
{
    $i = 3;
    $root = sqrt($num);
    while($num % $i)
    {
        if($i > $root)
        {
            $i = $num;
            break;
        }
        $i += 2;
    }
    echo $i." ".($num/$i).PHP_EOL;
}