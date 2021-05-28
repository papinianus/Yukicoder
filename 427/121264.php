<?php
list($h, $w) = explode(" ",trim(fgets(STDIN)));
if($h > $w)
{
    echo "TATE";
}
else
{
    echo "YOKO";
}
echo PHP_EOL;