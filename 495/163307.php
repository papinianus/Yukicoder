<?php
$string = trim(fgets(STDIN));
$len = strlen($string);
$l = 0;
$r = 0;
for($i = 0; $i <= $len - 6; $i += 5)
{
    if ($string[$i+1] == "*") {
        $r++;
    }
    else {
        $l++;
    }
}
echo $l." ".$r.PHP_EOL;