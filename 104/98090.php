<?php
$pos = 1;
$route = str_split(trim(fgets(STDIN)));
foreach($route as $path) {
    if(in_array($path, ['L','R'])) {
    $pos <<= 1;
        if($path == 'R') {
            $pos++;
        }
    }
}
echo $pos.PHP_EOL;