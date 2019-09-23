<?php
// Andmetüübid
//      Sõned - string
//      "Tekstikujulised andmed" või 'Tekstikujulised andmed'
//      Numbrid - täisarvud - 1, 2, 3, 175, 2100, jne
//      Numbrid - reaalarvud - 1.5, 3.2, 4.7, jne

// Muutujate defineerimine + väärtuse omistamine
// $muutujaNimi = väärtus;
$eesNimi = "Hannes";
$pereNimi = "Juurma";
$yksus = "VS19";
$email = "hannes.juurma@email.ee";

// Muutujate kasutamine - kutsumine
// . ühendab muutuja sisu koos tekstiga
// = omistamise märk - muutuja omistab mingisuguse väärtuse
echo $eesNimi . " " . $pereNimi . "<br>";
echo $yksus . "<br>";
echo $email . "<br>";
