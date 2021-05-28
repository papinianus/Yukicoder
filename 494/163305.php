<?php
$string = trim(fgets(STDIN));
$yukicoder = "yukicoder";
echo $yukicoder[strpos($string, "?")];
echo PHP_EOL;