<?php
// Here your code !
$L = trim(fgets(STDIN));
$N = trim(fgets(STDIN));
$boxes = explode(' ',trim(fgets(STDIN)));
sort($boxes);
$len = 0;
for($i = 0; $i < $N;) {
    if($L >= ($len + $boxes[$i])) {
        $len += $boxes[$i];
        $i++;
    } else {
        break;
    }
}
echo $i.PHP_EOL;