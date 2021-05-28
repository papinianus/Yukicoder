<?php
$n = trim(fgets(STDIN));
$flgs = array_fill(0, $n, 1);
for($i = 0; $i < $n; $i++) {
    $row = explode(" ", trim(fgets(STDIN)));
    foreach($row as $key=>$value) {
        if($value != '-' && $value != 'nyanpass') {
            $flgs[$key] = 0;
        }
    }
}
if(count(array_keys($flgs, 1)) == 1) {
    echo (array_search(1, $flgs)+1);
} else {
    echo -1;
}
echo PHP_EOL;