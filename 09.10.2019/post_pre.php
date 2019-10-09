<?php
//Suurenemine 1 võrra
$x = 10;
$y = ++$x;  //<-- Pre-operator ------ Post-operator --> $y = $x++;
echo "X = " . $x . "<br>";
echo "Y = " . $y . "<br>";