<?php
$devnull = trim(fgets(STDIN));
$s = explode(" ", trim(fgets(STDIN)));
$t = explode(" ", trim(fgets(STDIN)));

foreach($s as $key => $value)
{
    if($value == $t[$key]) { continue; }
    echo ($key+1).PHP_EOL;
    echo $value.PHP_EOL;
    echo $t[$key].PHP_EOL;
    break;
}