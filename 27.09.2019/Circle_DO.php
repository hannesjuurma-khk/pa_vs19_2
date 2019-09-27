<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background: aliceblue;
            font-family: Arial, sans-serif;
        }

        h2 {
            font-size: 1rem;
            text-align: center;
            margin: 1rem;
            animation: example 1s linear 1s infinite;
        }

        /*@keyframes example {*/
        /*    from {text-align: left;}*/
        /*    to{text-align: right;}*/
        /*}*/
    </style>
</head>
<body>

</body>
</html>
<?php
//circle_do.php
$circleRadius = $_GET["circle-radius"];
//circleRadius sisu kontrollimine
//var_dump($circleRadius); - kontrollib sisestust
//arvutused
$circleArea = pi() * ($circleRadius * $circleRadius);
$circleCircumference = pi() * 2 * $circleRadius;
//ümardamine ja omistamine
//$circleAreaRounded = round($circleArea, 3); -- loon uue muutuja
$circleArea = round($circleArea, 3); //Kirjutan muutuja üle
//print
echo "<h2>Ringi raadius = " . $circleRadius . "<br></h2>";
echo "<h2>Ringi pindala = " . $circleArea . "<br></h2>";
echo "<h2>Ringi ümbermõõt = " . $circleCircumference . "<br></h2>";
?>