<?php
$str = trim(fgets(STDIN));
$len = strlen($str);
for($i = strlen($str); $i ; $i--){
    if($str[$i-1] == '>') {
        echo '<';
    } else {
        echo '>';
    }
}
echo PHP_EOL;