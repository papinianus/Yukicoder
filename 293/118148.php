<?php
list($a, $b) = explode(" ",trim(fgets(STDIN)));
$alen = strlen($a);
$blen = strlen($b);
if($alen > $blen)
{
    echo $a;
}
else if($alen < $blen)
{
    echo $b;
}
else
{
    for($i = 0; $i < $alen; $i++)
    {
        if($a[$i] == $b[$i])
        {
            continue;
        }
        else if(largerthan($a[$i], $b[$i]))
        {
            echo $a;
            break;
        }
        else
        {
            echo $b;
            break;
        }
    }
}
echo PHP_EOL;

function largerthan($a, $b)
{
    if($a == 4 && $b == 7)
    {
        return true;
    }
    else if($a == 7 && $b == 4)
    {
        return false;
    }
    else
    {
        return ($a > $b);
    }
}