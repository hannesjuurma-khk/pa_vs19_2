# Päeva teemad - (27.09.2019)
## Muutuja siseinfo kontroll
```
<?php
var_dump($muutujaNimi);
?>
```
Loe rohkem https://www.php.net/manual/en/function.var-dump.php
## PHP sisefunktsioonide kasutamine
* PI arvutamine
```
<?php
pi();
?>
```
Loe rohkem: [https://www.php.net/manual/en/function.pi.php](https://www.php.net/manual/en/function.pi.php)
* Väärtuse ümmardamine
```
<?php
round($muutujaNimi, täpsuseVäärtus);
?>
```
Loe rohkem: [https://www.php.net/manual/en/function.round.php](https://www.php.net/manual/en/function.round.php)

## Input vastuvõtmine
```
<form action="phpfail.php" method="get">
    <input type="#" id="" name="mingisugune-name">
</form>

$muutujaNimi = $_GET["mingisugune-name"];
```
