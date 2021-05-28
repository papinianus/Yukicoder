<?php
$voice = trim(fgets(STDIN));
echo substr_count($voice, 'n');
echo PHP_EOL;