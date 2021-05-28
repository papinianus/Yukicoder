<?php
echo array_sum(str_split(preg_replace('/[^0-9]/', '', trim(fgets(STDIN))))).PHP_EOL;