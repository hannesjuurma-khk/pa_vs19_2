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

echo "<br>";

//Püramiid
for ($row = 1; $row < 6; $row++) {
    echo $row;
    //spaces
    for ($col = 1; $col < (6 - $row); $col++) {
        echo "&nbsp;&nbsp;&nbsp;";
    }
    //tärnide vasak osa
    for ($col = 1; $col <= $row; $col++) {
        echo "*&nbsp";
    }
    //tärnide parem osa
    for ($col = 1; $col <= ($row - 1); $col++) {
        echo "*&nbsp";
    }
    echo "<br>";
}

echo "<br>";

//Püramiid vol 2
for ($row = 1; $row < 6; $row++) {
    echo $row;
    //spaces
    for ($col = 1; $col < (6 - $row); $col++) {
        echo "&nbsp;&nbsp;&nbsp;";
    }
    //tärnide vasak osa
    for ($col = 1; $col <= ($row * 2 - 1); $col++) {
        echo "*&nbsp";
    }
    echo "<br>";
}
