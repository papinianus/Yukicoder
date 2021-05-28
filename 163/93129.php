<?php
// Here your code !
$str = str_split(trim(fgets(STDIN)));
foreach($str as $char) {
    if($char == strtolower($char)) {
        echo strtoupper($char);
    } else {
        echo strtolower($char);
    }
}
echo PHP_EOL;