<?php
$ans = false;
while(!feof(STDIN))
{
    if($ans !== false)
    {
        echo $ans.PHP_EOL;
    }
    $phrase = fgets(STDIN);
    // echo "--$phrase--\n";
    $phrase = explode(" ", $phrase);
    $who = array_shift($phrase);
    $find = true;
    switch($who)
    {
        case "digi":
            $pattern = "/.*nyo[^A-Za-z0-9]{0,3}$/i";
            break;
        case "petit":
            $pattern = "/.*nyu[^A-Za-z0-9]{0,3}$/i";
            break;
        case "rabi":
            $pattern = "/.*[A-Za-z0-9]+.*/i";
            break;
        case "gema":
            $pattern = "/.*gema[^A-Za-z0-9]{0,3}$/i";
            break;
        case "piyo":
            $pattern = "/.*pyo[^A-Za-z0-9]{0,3}$/i";
            break;
        default:
            $ans = "WRONG!";
            $find = false;
            break;
    }
    if(!$find)
    {
        continue;
    }
    $ret = preg_match($pattern, implode(" ", $phrase));
    if($ret)
    {
        $ans = "CORRECT (maybe)";
    }
    else
    {
        $ans = "WRONG!";
    }
}