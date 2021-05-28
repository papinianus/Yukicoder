<?php
$str = trim(fgets(STDIN));
$pattern = "([^ｗ]+?)([ｗ]+)";
$str = mb_convert_encoding($str, "UTF-8");
mb_regex_encoding('UTF-8');
mb_ereg_search_init($str, $pattern);
while(($match = mb_ereg_search_regs()) !== false)
{
    $len = mb_strlen($match[2]);
    $lens[] = $len;
    $substrs[$len][] = $match[1];
}
$max = max($lens);
echo implode(PHP_EOL, $substrs[$max]);
echo PHP_EOL;