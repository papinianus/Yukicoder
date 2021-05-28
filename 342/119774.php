<?php
$str = trim(fgets(STDIN));
$pattern = "([^ｗ]+?)([ｗ]+)";
mb_ereg_search_init($str, $pattern);
while(($match = mb_ereg_search_regs()) !== false)
{
    $len = mb_strlen($match[2]);
    $lens[] = $len;
    $substrs[$len][] = $match[1];
}
$max = max($lens);
$string =  implode(PHP_EOL, $substrs[$max]);
echo mb_substr($string, 0);
// echo preg_replace("/\xEF\xBB\xBF/", "", $string);
echo PHP_EOL;