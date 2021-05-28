<?php
$items = array_fill(0, 11, 0);
$count = trim(fgets(STDIN));
$total = 3*$count;
$pwrUp = 0;
while($count) {
    list($item1, $item2, $item3) = explode(' ', trim(fgets(STDIN)));
    $items[$item1]++;
    $items[$item2]++;
    $items[$item3]++;
    $count--;
}
for($i = 1; $i <= 10; $i++) {
    $pwrUp += floor($items[$i]/2);
}
$rest = $total - $pwrUp * 2;
$pwrUp += floor($rest/4);
echo $pwrUp.PHP_EOL;
