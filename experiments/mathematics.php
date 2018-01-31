<?php

include '../vendor/autoload.php';

$cols = [];

$mathematician = new \Sixteenstudio\Mathematician\Mathematician;


// # (2/3) * 3
echo "\e[1;33m \e[43m BCMath In-Precise Fractioning:\033[0m ";
echo bcmul(bcdiv(2,3,10), 3, 10);
echo "\n";

echo "\e[1;32m \e[42m Sixteenstudio\\Mathematics Precise Fractioning:\033[0m ";
echo $mathematician->multiply($mathematician->divide(2,3,10), 3, 10);
echo "\n";

echo "\n";