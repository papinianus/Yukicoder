<?php
$n = trim(fgets(STDIN));
$rest = ($n * ($n - 1)) / 2;
echo gmp_gcd($n, $rest);