<?php
$word = trim(fgets(STDIN));
$word = str_replace("hamu","1", $word);
$word = str_replace("ham","0", $word);
$num = bindec($word) * 2;
$ans = decbin($num);
$ans = str_replace("1", "hamu", $ans);
$ans = str_replace("0", "ham", $ans);
echo $ans.PHP_EOL;