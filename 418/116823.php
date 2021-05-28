<?php
$voice = trim(fgets(STDIN));
$cnt = preg_match_all("/mi-*n(.*?)/",$voice);
echo $cnt;
echo PHP_EOL;