<?php
$list["A"] = explode(" ", trim(fgets(STDIN)));
$list["B"] = explode(" ", trim(fgets(STDIN)));
$list["C"] = explode(" ", trim(fgets(STDIN)));

array_multisort(array_column($list, 0), SORT_DESC, array_column($list, 1), SORT_ASC, $list);

echo implode(PHP_EOL, array_keys($list));
echo PHP_EOL;