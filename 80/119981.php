<?php
$peri = trim(fgets(STDIN));
if($peri > 3)
{
    if($peri % 2)
    {
        $peri--;
    }
    $hw = $peri / 2;
    if($hw % 2)
    {
        echo floor($hw / 2)*ceil($hw / 2);
    }
    else
    {
        echo $hw * $hw / 4;
    }
}
else
{
    echo "0";
}
echo PHP_EOL;