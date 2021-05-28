<?php
list($a, $b) = explode(" ", trim(fgets(STDIN)));
echo intval($a) ^ intval($b);
echo PHP_EOL;