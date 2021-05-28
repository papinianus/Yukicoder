<?php
list($len, $target) = explode(' ', trim(fgets(STDIN)));
$str = str_split(trim(fgets(STDIN)));
$lefts = [];
$structOfStr = [];
foreach($str as $i => $char) {
    if($char == '(') {
        array_push($lefts, $i);
    } else { // ')'
        $prevLeft = array_pop($lefts);
        $structOfStr[$i] = $prevLeft;
        $structOfStr[$prevLeft] = $i;
    }
}
echo ($structOfStr[$target-1]+1).PHP_EOL;