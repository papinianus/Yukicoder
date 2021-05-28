<?php
list($h, $n) = explode(" ", trim(fgets(STDIN)));
$n--;
$heights = [$h];
while($n) {
    $n--;
    $heights[] = trim(fgets(STDIN));
}
rsort($heights);
$pos = array_search($h, $heights) + 1;
switch(substr($pos."", -1)) {
    case "1":
        echo $pos."st";
        break;
    case "2":
        echo $pos."nd";
        break;
    case "3":
        echo $pos."rd";
        break;
    default:
        echo $pos."th";
        break;
}
echo PHP_EOL;