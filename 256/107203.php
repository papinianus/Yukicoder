<?php
$nums = str_split(trim(fgets(STDIN)));
rsort($nums);
echo implode('', $nums);
echo PHP_EOL;