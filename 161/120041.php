<?php
list($g, $c, $p) = explode(" ",trim(fgets(STDIN)));
$hands = array_count_values(str_split(trim(fgets(STDIN))));
$first = [];
$win = 0;
$even = 0;
foreach($hands as $hand => $times)
{
    switch($hand)
    {
        case "G":
            while($p && $times)
            {
                $times--;
                $p--;
                $win++;
            }
            $first["G"] = $times;
            break;
        case "C":
            while($g && $times)
            {
                $times--;
                $g--;
                $win++;
            }
            $first["C"] = $times;
            break;
        case "P":
            while($c && $times)
            {
                $times--;
                $c--;
                $win++;
            }
            $first["P"] = $times;
            break;
    }
}
foreach($first as $hand => $times)
{
    switch($hand)
    {
        case "G":
            while($g && $times)
            {
                $times--;
                $g--;
                $even++;
            }
            break;
        case "C":
            while($c && $times)
            {
                $times--;
                $c--;
                $even++;
            }
            break;
        case "P":
            while($p && $times)
            {
                $times--;
                $p--;
                $even++;
            }
            break;
    }
}
echo $win*3+$even;
echo PHP_EOL;
