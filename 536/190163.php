<?php
$name = trim(fgets(STDIN));
$header = substr($name, 0, strlen($name) - 2);
$footer = substr($name, -2);
if($footer === "ai")
{
    $footer = "AI";
} else {
    $footer .= "-AI";
}
echo $header.$footer.PHP_EOL;