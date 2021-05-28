<?php
$L = trim(fgets(STDIN));
echo ((($L - 3 + 1) + 1)*(($L-1)/2) / 2);
echo PHP_EOL;
/*
ababababa
9
777
55555
3333333

abababa
7
555
33333

ababa
5
333

aba
3

(1 + 9-3+1) * (9-1/2) /2
初項+末項      項数
*/