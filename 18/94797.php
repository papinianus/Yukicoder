<?php
$strs = str_split(trim(fgets(STDIN)));
$alpha = 'ZABCDEFGHIJKLMNOPQRSTUVWXY';
foreach($strs as $i => $char) {
    $coded = strpos($alpha, $char);
    $decod = (26+$coded-($i%26)-1)%26;
    echo $alpha[$decod];
}
echo PHP_EOL;