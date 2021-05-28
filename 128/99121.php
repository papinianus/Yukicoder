<?php
$budget = (int)(trim(fgets(STDIN))/1000);
$children = trim(fgets(STDIN));
echo (floor($budget/$children)?floor($budget/$children).'000':0).PHP_EOL;