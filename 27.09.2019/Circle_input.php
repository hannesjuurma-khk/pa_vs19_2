<?php
//circle_input.php
?>
<!--HTML vorm-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="Vorm">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: aliceblue;
        }

        header {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: hotpink;
            background: lightblue;
            margin: 1rem;
            text-shadow: #fff 3px 2px;
            box-shadow: hotpink 3px 2px;
            border-radius: 10px;
        }

        form label {
            display: block;
            text-align: center;
            margin: 0.5rem;
        }

        form input {
            display: block;
            width: 50vw;
            height: 2vh;
            border-radius: 5px;
            margin: auto;
        }
    </style>
</head>
<body>
<header>
    <h1>Palun täitke järgnevad väljad!</h1>
</header>
<form action="Circle_DO.php" method="get">
    <label for="radius">Sisesta ringi raadius </label>
    <input type="number" id="radius" name="circle-radius" placeholder="ex. 12345" style="text-align: center">
</form>
</body>
</html>