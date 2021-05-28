<?php
list($d1, $d2, $d3, $s) = explode(" ", trim(fgets(STDIN)));
$d = $d1+$d2+$d3;
if($s || $d < 2)
{
    echo "SURVIVED";
}
else
{
    echo "DEAD";
}
echo PHP_EOL;