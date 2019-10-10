<?php
//Absolute value computing
//Define variables
$number = -15;
//If number is negative, it is smaller than 0;
if ($number < 0) {
    $numberAbs = $number * -1; //Korrutan läbi -1, et saada absoluutväärtus
} else {
    $numberAbs = $number;
}
echo $number . " absoluutväärtus on " . $numberAbs;