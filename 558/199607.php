<?php
$str = trim(fgets(STDIN));
if(strpos($str, "575") === FALSE) {
    echo "NO";
} else {
    echo "YES";
}
echo PHP_EOL;