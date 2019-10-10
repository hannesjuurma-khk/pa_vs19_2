<?php
/* Else kasutamata
//Define variables
$age = 15;
echo "Vanus: " . $age . "<br>";
//0-17 - laps
if ($age > 0 and $age < 18) {
    echo "Sa oled laps<br>";
}
//18-65 - täiskasvanu
if ($age > 17 and $age < 66) {
    echo "Sa oled täiskasvanu<br>";
}
//66+ - senioor
if ($age > 65) {
    echo "Sa oled senioor<br>";
}
*/
//Define variables
$age = -5;
echo "Vanus: " . $age . "<br>";

if ($age > 0 and $age < 18) {   //0-17 - laps
    echo "Sa oled laps<br>";
} else if ($age > 17 and $age < 66) {   //18-65 - täiskasvanu
    echo "Sa oled täiskasvanu<br>";
} else if ($age > 65) { //66+ - senioor
    echo "Sa oled senioor<br>";
} else {
    echo "Midagi läks valesti =(";
}
?>

