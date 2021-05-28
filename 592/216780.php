<?php
$devnull = trim(fgets(STDIN));
$str = str_split(trim(fgets(STDIN)));
$lefts = [];
$structOfStr = [];
foreach($str as $i => $char) {
    if($char == '(') {
        array_push($lefts, $i);
    } else { // ')'
        $prevLeft = array_pop($lefts);
        $structOfStr[$i] = $prevLeft + 1;
        $structOfStr[$prevLeft] = $i + 1;
    }
}
ksort($structOfStr);
echo implode(PHP_EOL, $structOfStr);
echo PHP_EOL;
