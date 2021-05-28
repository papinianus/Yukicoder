<?php
$stem = "WBWBWBWBWBWBWBWBWBWBWBWBWBWBWBWBWBWBWBWBWBWBWBWBWBWB";
list($wid, $hei, $col) = explode(' ', trim(fgets(STDIN)));
if($col == 'W') {
    $pos = 0;
} else {
    $pos = 1;
}
$line[1] = substr($stem, $pos, $wid);
$line[0] = substr($stem, $pos+1, $wid);
for($i = 1; $i <= $hei; $i++) {
    echo $line[$i%2].PHP_EOL;
}