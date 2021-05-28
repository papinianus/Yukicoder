<?php
list($n, $m) = explode(' ',trim(fgets(STDIN)));
$cards = range(1, $n);
$cuts = explode(' ',trim(fgets(STDIN)));
foreach($cuts as $cut) {
    $card = $cards[$cut-1];
    unset($cards[$cut-1]);
    array_unshift($cards, $card);
}
echo $cards[0].PHP_EOL;