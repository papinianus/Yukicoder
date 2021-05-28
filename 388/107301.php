<?php
list($S, $F) = explode(" ", trim(fgets(STDIN)));
echo 1+(floor($S/$F));
echo PHP_EOL;