<?php
$curpos = trim(fgets(STDIN));
$count = trim(fgets(STDIN));
for($i = 0; $i < $count; $i++) {
    list($src, $dst) = explode(' ', trim(fgets(STDIN)));
    if($src == $curpos) {
        $curpos = $dst;
    } else if ($dst == $curpos) {
        $curpos = $src;
    }
}
echo $curpos.PHP_EOL;