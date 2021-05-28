<?php
for($i = 0; $i < 1000; $i++) {
    printf("%03d\n",$i);
    flush();
    $res = trim(fgets(STDIN));
    if($res == 'unlocked') {
        break;
    }
}