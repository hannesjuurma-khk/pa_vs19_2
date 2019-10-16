<?php

$nation = $_GET["nation"];
$age = $_GET["age"];
$education = $_GET["education"];

if (strlen($nation) > 0 and strlen($age > 0) and strlen($education) > 0) {
    if ($nation != "eestlane") {
        echo "Kodakondsus ei sobi!";
    } else {
        if ($age < 18) {
            echo "Vanust on veel liiga vähe!";
        } else {
            if ($education == "põhi" or $education == "kesk" or $education == "kutse" or $education == "kõrg") {
                echo "Jou, tule väkke! Siin on väga tore! C:";
            } else {
                echo "Teie haridustase on nõrk";
            }
        }
    }


} else {
    echo "Tuleb lisada õiged väärtused";
}