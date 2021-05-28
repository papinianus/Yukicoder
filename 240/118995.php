<?php
$directions = [[-2,-1],[-2,1],[-1,-2],[-1,2],[1,-2],[1,2],[2,-1],[2,1],];
$pos = [0=>[0=>1]];
for($i = 3;$i;$i--)
{
        foreach($pos as $x => $ys)
        {
            foreach($ys as $y => $flg)
            {
                foreach($directions as $dir)
                {
                    $pos[$x+$dir[0]][$y+$dir[1]] = 1;
                }
            }
        }
}
list($qx , $qy) = explode(" ", trim(fgets(STDIN)));
if(isset($pos[$qx][$qy]))
{
    echo "YES";
}
else {
    echo "NO";
}
echo PHP_EOL;
