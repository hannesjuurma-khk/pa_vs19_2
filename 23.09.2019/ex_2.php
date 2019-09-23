<?php
/*
 * Koosta programm, mis hoiab muutujatena järgmised andmed
 * Eesnimi
 * Perenimi
 * Vanus
 * Pikkus meetrites
 * Kaal kilogrammides
 * Väljasta kõik vajalik info ka!*/
$eesNimi = "Hannes";
$pereNimi = "Juurma";
$vanus = "19";
$pikkus = "1.8m";
$kaal = "75kg";

echo "<h1>Minu andmed</h1>";
echo "Eesnimi: " . $eesNimi . "<br>";
echo "Perenimi: " . $pereNimi . "<br>";
echo "Vanus: " . $vanus . "<br>";
echo "Pikkus: " . $pikkus . "<br>";
echo "Kaal: " . $kaal . "<br>";

// Arvutamine
// $muutuja = väärtus;
$kmi = $kaal / ($pikkus * $pikkus);
echo "Minu kehamassiindeks on: " . $kmi . "<br>";