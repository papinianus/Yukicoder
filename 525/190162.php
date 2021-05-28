<?php
list($h, $m) = explode(":", trim(fgets(STDIN)));
$m += 5;
if($m >= 60) {
    $h++;
    $m -= 60;
}
$h %= 24;
echo sprintf('%02d:%02d', $h, $m);