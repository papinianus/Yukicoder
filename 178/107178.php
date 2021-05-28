<?php
$n = trim(fgets(STDIN));
$source = [];
for($i=0;$i<$n;$i++) {
    list($space, $tab) =  explode(" ", trim(fgets(STDIN)));
    $source[] = $space+4*$tab;
}
$width = max($source);
$ans = 0;
foreach($source as $line) {
    $rest = $width - $line;
    if($rest % 2) {
        $ans = -1;
        break;
    } else {
        $ans += $rest / 2;
    }
}
echo $ans;
echo PHP_EOL;