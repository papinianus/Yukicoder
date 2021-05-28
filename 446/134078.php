<?php
if(!isValidTestCase(trim(fgets(STDIN))))
{
    echo "NG".PHP_EOL;
    exit;
}
if(!isValidTestCase(trim(fgets(STDIN))))
{
    echo "NG".PHP_EOL;
    exit;
}
echo "OK".PHP_EOL;

function isValidTestCase($num)
{
    $pattern = '/(^[1-9][0-9]+$)|(^0$)/';
    if(preg_match($pattern, $num) === 0)
    {
        return false;
    }
    if($num > 12345)
    {
        return false;
    }
    return true;
}