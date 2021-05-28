<?php
list($h, $w) = explode(" ", trim(fgets(STDIN)));
for($i = 0, $found = 0; $i < $h; $i++)
{
    $input = trim(fgets(STDIN));
    $sky[] = $input;
    if($found > 1) {continue;}
    $pos = strpos($input, "*");
    if($pos === FALSE) {continue;}
    $stars[$found] = [$i, $pos];
    $found++;
    if($found > 1) {$continue;}
    $rpos = strrpos($input, "*");
    if($rpos === FALSE || $rpos === $pos) {continue;}
    $stars[$found] = [$i, $rpos];
    $found++;
}
$third = getAddedPosition($stars[0], $stars[1]);
$sky[$third[0]][$third[1]] = '*';
array_reverse($sky);
foreach($sky as $row)
{
    echo $row.PHP_EOL;
}

function getAddedPosition($star1, $star2)
{
    $candidates = [[0,0],[1,0],[0,1]];
    foreach($candidates as $candidate)
    {
        if($star1[0] == $candidate[0] && $star1[1] == $candidate[1]) {continue;}
        if($star2[0] == $candidate[0] && $star2[1] == $candidate[1]) {continue;}
        if($star1[0] == $candidate[0] && $star2[0] == $candidate[0]) {continue;}
        if($star1[1] == $candidate[1] && $star2[1] == $candidate[1]) {continue;}
        if($star1[0] == $candidate[0] || $star2[0] == $candidate[0] || $star1[0] == $star2[0]) {return $candidate;}
        if($star1[1] == $candidate[1] || $star2[1] == $candidate[1] || $star1[1] == $star2[1]) {return $candidate;}
        $twoone = ($star2[0] - $star1[0]) / ($star2[1] - $star1[1]);
        $onecan = ($star1[0] - $candidate[0]) / ($star1[1] - $candidate[1]);
        if($twoone == $onecan) {continue;}
        return $candidate;
    }
}