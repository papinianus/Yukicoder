<?php
$n = trim(fgets(STDIN));
for($i = 0; $i < $n; $i++) {
    $goal = trim(fgets(STDIN));
    $goal++;
    $route = "";
    while($goal > 1) {
        if($goal % 2) {
            $goal--;
            $goal >>= 1;
            $route .= "R";
        } else {
            $goal >>= 1;
            $route .= "L";
        }
    }
    echo strrev($route).PHP_EOL;
}