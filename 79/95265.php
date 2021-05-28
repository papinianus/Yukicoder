<?php
$null = trim(fgets(STDIN));
$sheet = array_fill(0, 11, 0);
$lv = explode(' ', trim(fgets(STDIN)));
foreach($lv as $val) {
    $sheet[$val]++;
}
echo max(array_keys($sheet, max($sheet))).PHP_EOL;