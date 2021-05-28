<?php
$str = trim(fgets(STDIN));
$ans = "NA";
$pos = strlen($str);
$list = ["OOO"=>"East", "XXX"=>"West"];
foreach($list as $phrase => $team) {
    $found = strpos($str, $phrase);
    if( $found !== FALSE && $found < $pos)
    {
        $ans = $team;
        $pos = $found;
    }
}
echo $ans;
echo PHP_EOL;