<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operators</title>
    <style>
        table, th, td {
            border: 1px solid red;
            border-collapse: collapse;
        }

        th, td {
            padding: 0.5rem;
            text-align: center;
        }

        th {
            background: hotpink;
        }
    </style>
</head>
<body>
</body>
</html>
<?php
//Define variables
$x = 8;
$y = 2;
//Additional variables
$sum = $x + $y;
$diff = $x - $y;
$multiply = $x * $y;
$divide = $x / $y;
$residual = $x % $y;
//Output table
echo "
    <table>
        <thead>
            <tr>
                <th>Operaator</th>
                <th>Nimetus</th>
                <th>Näide</th>
                <th>Tulemus</th>
            </tr>   
        </thead>
        <tbody>
        <!--Liitmine-->
            <tr>
                <td>x + y</td>
                <td>Liitmine</td>
                <td>" . $x . " + " . $y . "</td>
                <td>" . $sum . "</td>
            </tr>
        <!--Lahutamine-->
            <tr>
                <td>x - y</td>
                <td>Lahutamine</td>
                <td>" . $x . " - " . $y . "</td>
                <td>" . $diff . "</td>
            </tr>
        <!--Korrutamine-->
            <tr>
                <td>x * y</td>
                <td>Korrutamine</td>
                <td>" . $x . " * " . $y . "</td>
                <td>" . $multiply . "</td>
            </tr>
        <!--Jagamine-->
            <tr>
                <td>x - y</td>
                <td>Jagamine</td>
                <td>" . $x . " / " . $y . "</td>
                <td>" . $divide . "</td>
            </tr>    
        <!--Jääk-->
            <tr>
                <td>x % y</td>
                <td>Jääk</td>
                <td>" . $x . " % " . $y . "</td>
                <td>" . $residual . "</td>
            </tr>    
        </tbody>
    </table>
";
?>