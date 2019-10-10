<?php
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