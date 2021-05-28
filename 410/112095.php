<?php
list($ax, $ay) = explode(" ", trim(fgets(STDIN)));
list($bx, $by) = explode(" ", trim(fgets(STDIN)));
$xs = (max($ax, $bx) - min($ax, $bx)) / 2;
$ys = (max($ay, $by) - min($ay, $by)) / 2;
echo $xs + $ys;
echo PHP_EOL;