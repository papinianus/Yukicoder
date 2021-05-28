<?php
$trial = trim(fgets(STDIN));
while($trial)
{
    $ans = "im";
    while(true)
    {
        $str = trim(fgets(STDIN));
        $wpos = strpos($str, "W");
        $gpos = strpos($str, "G");
        $rpos = strpos($str, "R");
        $len = strlen($str);
        if($wpos !== 0 || $gpos === false || $rpos === false || $rpos < $gpos ) // must : start with w , g r exist , r after g
        {
            break;
        }
        $str = strrev($str);
        $len = strlen($str);
        $wpos = strpos($str, "W");
        $gpos = strpos($str, "G");
        $rpos = strpos($str, "R");
        if($rpos !== 0 || $wpos < $gpos) { break; }
        $wcount = substr_count($str, "W");
        $rcount = substr_count($str, "R");
        $gcount = substr_count($str, "G");
        if($rcount != $gcount || $wcount < $gcount) { break; } // must : num(r) = num(g) , num(w) >= num (g) and num (r)
        for($i = 0; $rcount || $gcount; $i++) // check as long as far there's r or g so that w lacks (such like WGGwwwRR)
        {
            switch($str[$i])
            {
                case "R":
                    $rcount--;
                    break;
                case "G":
                    $gcount--;
                    break;
                case "W":
                    $wcount--;
            }
            if($rcount > $gcount || $wcount < $gcount) { break 2;} // too much g after r, too much w after g
        }
        $ans = "";
        break;
    }
    echo $ans."possible";
    echo PHP_EOL;
    $trial--;
}