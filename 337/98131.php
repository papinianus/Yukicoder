<?php
list($n, $p) = explode(' ',trim(fgets(STDIN)));
if($n == 1 || $p == 0) {
    echo '=';
} else {
    echo '!=';
}
echo PHP_EOL;