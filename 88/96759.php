<?php
$sente = trim(fgets(STDIN));
$opponent = ['yukiko'=>'oda', 'oda'=>'yukiko'];
$i = 8;
$chars = '';
while($i) {
    $chars .= str_replace('.', '', trim(fgets(STDIN)));
    $i--;
}
$which = strlen($chars) % 2;
if($which) {
    echo $opponent[$sente];
} else {
    echo $sente;
}
echo PHP_EOL;