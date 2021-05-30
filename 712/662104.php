<?php
declare(strict_types=1);
trim(fgets(STDIN));
$str = "";
while($stdin = fgets(STDIN)) {
    $str .= trim($stdin);
}
echo count_chars($str,0)[ord("W")].PHP_EOL;