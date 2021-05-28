<?php
$red = 0;
$blu = 0;
$times = 3;
while($times) {
    (trim(fgets(STDIN))=== "RED")? $red++: $blu++;
    $times--;
}
echo ($red > $blu) ? "RED" : "BLUE";