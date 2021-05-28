<?php
$null = trim(fgets(STDIN));
$givenCards = explode(" ",trim(fgets(STDIN)));
$givenCards = array_map("getValueOfCard", $givenCards);
sort($givenCards);
echo implode(" ",array_map("getCardByValue", $givenCards));
echo PHP_EOL;

function getCardByValue($cardVals, $suits="DCHS", $nums = "0A23456789TJQK") {
    $card = $suits[(int)($cardVals/100)];
    $card .= $nums[$cardVals%100];
    return $card;
}

function getValueOfCard($cardStr, $suits="DCHS", $nums = "0A23456789TJQK") {
    $value = stripos($suits, $cardStr[0])*100;
    $value += stripos($nums, $cardStr[1]); 
    return $value;
}