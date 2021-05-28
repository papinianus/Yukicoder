<?php
$n = trim(fgets(STDIN));
$s = trim(fgets(STDIN));
$t = trim(fgets(STDIN));
$diff = 0;
for($i = 0; $i < $n; $i++) {
    if($s[$i]!=$t[$i]) {
        $diff++;
    }
}
echo $diff.PHP_EOL;