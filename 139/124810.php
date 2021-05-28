<?php
$pos = 0;
$now = 0;
list($trafficCnt, $goal) = explode(" ",trim(fgets(STDIN)));
for(;$trafficCnt;$trafficCnt--)
{
    list($trafficStart, $trafficWidth, $trafficDuration) = explode(" ",trim(fgets(STDIN)));
    list($pos, $now) = arrive($pos, $trafficStart, $now);
    list($pos, $now) = accross($pos, $trafficWidth, $trafficDuration, $now);
}
if($pos < $goal)
{
    list($pos, $now) = arrive($pos, $goal, $now);
}
echo $now.PHP_EOL;

function arrive($from, $to, $now = 0)
{
    $dist = $to - $from;
    return [$to, $now+$dist];
}

function accross($from, $width, $duration, $now)
{
    $trafficTime = $now % ($duration * 2);
    if($trafficTime + $width <= $duration)
    {
        return [$from + $width, $now + $width];
    }
    else
    {
        return [$from + $width ,$now + ($duration * 2 - $trafficTime) + $width];
    }
}