<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <style>
        body {
            display: flex;
            font-family: 'Montserrat', sans-serif;
            height: 100vh;
            align-items: center;

        }

        form {
            margin: 0 auto;
            width: 50%;
            min-width: 300px;
            max-width: 1000px;
            justify-content: center;
            align-items: center;
            text-align: center;

        }

        .input-group input {
            display: block;
            width: 100%;
            padding: 0.5rem;
            text-align: center;
        }

        .input-group label {
            display: block;
            padding: 20px;
            font-size: 1.4rem;
        }

        .btn {
            padding: 0.5rem 2rem;
            border: none;
        }

    </style>
</head>
<body>
<form action="divide_0_action.php" method="get">
    <div class="input-group">
        <label for="numberOne">Sisesta esimene arv </label>
        <input type="text" id="numberOne" name="numberOne">
    </div>
    <br>
    <div class="input-group">
        <label for="numberTwo">Sisesta teine arv </label>
        <input type="text" id="numberTwo" name="numberTwo">
    </div>
    <br>
    <input class="btn" type="submit" value="Jagamine">
</form>
</body>
</html>
