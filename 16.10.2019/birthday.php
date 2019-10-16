<?php

$birthYear = $_GET["birthYear"];


if (strlen($birthYear) > 0) {
    $age = 2019 - $birthYear;
    if ($age % 5 == 0) {
        echo "Sul on juubeliaasta! Sa oled " . $age . " aasta vanune! Palju Õnne!";
    } else {
        echo "Sul on tavaline sünnipäev. Sa oled " . $age . " aasta vanune >:(";
    }
}