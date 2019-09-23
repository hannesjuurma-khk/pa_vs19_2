<?php
$firstName = $_GET['firstName'];
$lastName = $_GET['lastName'];
$age = $_GET['age'];
$height = $_GET['height'];
$weight = $_GET['weight'];

echo "<h1>Minu andmed</h1>" . "<br>";
echo "Eesnimi: " . $firstName . "<br>";
echo "Perenimi: " . $lastName . "<br>";
echo "Vanus: " . $age . "<br>";
echo "Pikkus: " . $height . "<br>";
echo "Kaal: " . $weight . "<br>";

$bmi = $weight / ($height * $height);
echo $firstName . " " . $lastName . " Sinu KMI on " . $bmi;
echo("<br>");
echo '<a href="input.php">Proovi veel</a>';
