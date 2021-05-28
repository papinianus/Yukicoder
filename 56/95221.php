<?php
list($price, $tax) = explode(' ',trim(fgets(STDIN)));
echo ($price+(floor($price*$tax/100))).PHP_EOL;