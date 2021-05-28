<?php
list($first_name, $first_point, $devnull) = explode(' ', trim(fgets(STDIN)));
list($second_name, $second_point, $devnull) = explode(' ', trim(fgets(STDIN)));
if(my_strcmp($first_point,$second_point)==0) {
    echo '-1';
} else if(my_strcmp($first_point,$second_point)>0) {
    echo $first_name;
} else {
    echo $second_name;
}
echo PHP_EOL;
function my_strcmp($str1, $str2) {
    $len1 = strlen($str1);
    $len2 = strlen($str2);
    if($len1 > $len2) {
        return 1;
    } else if($len2 > $len1) {
        return -1;
    } else {
        for($i = 0; $i < $len1; $i++){
            if($str1[$i] > $str2[$i]) {
                return 1;
            } else if($str1[$i] < $str2[$i]) {
                return -1;
            }
        }
        return 0;
    }
}