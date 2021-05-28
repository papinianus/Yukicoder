<?php
$null = trim(fgets(STDIN));
$sheet = array_count_values(explode(' ', trim(fgets(STDIN))));
echo max(array_keys($sheet, max($sheet))).PHP_EOL;