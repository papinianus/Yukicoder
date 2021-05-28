<?php
$hands = ['FULL HOUSE', 'THREE CARD', 'TWO PAIR', 'ONE PAIR', 'NO HAND'];
$nums = array_fill(1, 13, 0);
$mine = explode(' ',trim(fgets(STDIN)));
foreach($mine as $card) {
    $nums[$card]++;
}
$threes = 0;
$pair = 0;
foreach($nums as $num) {
    if($num == 3) {
        $threes++;
    } else if($num == 2){
        $pair++;
    }
}
if($threes) {
    if($pair) {
        echo $hands[0];
    } else {
        echo $hands[1];
    }
} else if($pair) {
    if($pair == 2) {
        echo $hands[2];
    } else {
        echo $hands[3];
    }
} else {
    echo $hands[4];
}
echo PHP_EOL;