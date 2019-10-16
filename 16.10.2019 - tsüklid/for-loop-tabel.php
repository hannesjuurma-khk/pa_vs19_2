<?php

for ($row = 1; $row < 6; $row++) {
    echo $row;
    for ($col = 1; $col < 6; $col++) {
        echo "*&nbsp";
    }
    echo "<br>";
}

echo "<br>";

for ($row = 1; $row < 6; $row++) {
    echo $row;
    for ($col = 1; $col < $row; $col++) {
        echo "*&nbsp";
    }
    echo "<br>";
}

echo "<br>";

for ($row = 1; $row < 6; $row++) {
    echo $row;
    for ($col = 1; $col < (6 - $row); $col++) {
        echo "&nbsp;&nbsp;&nbsp;";
    }
    for ($col = 1; $col <= $row; $col++) {
        echo "*&nbsp";
    }
    echo "<br>";
}