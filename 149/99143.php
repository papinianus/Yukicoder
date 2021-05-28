<?php
list($aw, $ab) =  explode(' ', trim(fgets(STDIN)));
list($bw, $bb) =  explode(' ', trim(fgets(STDIN)));
list($remove, $add) =  explode(' ', trim(fgets(STDIN)));
$remove -= min($ab, $remove);
$bw += min($aw, $remove);
$aw -= min($aw, $remove);
$aw += min($bw, $add);
echo $aw;
echo PHP_EOL;