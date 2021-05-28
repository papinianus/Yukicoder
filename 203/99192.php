<?php
$str = trim(fgets(STDIN));
$str .= trim(fgets(STDIN));
$max = 0;
preg_match_all('/o+/',$str,$matches);
foreach($matches[0] as $match) {
    $max = max($max, strlen($match));
}
echo $max.PHP_EOL;