<?php
$clock = ["XII","I","II","III","IIII","V","VI","VII","VIII","IX","X","XI"];
list($now, $diff) = explode(" ", trim(fgets(STDIN)));
$p_now = array_search($now, $clock);
$p_diff = ($p_now + $diff) % 12;
if($p_diff < 0) {
    $p_diff += 12;
}
echo $clock[$p_diff];