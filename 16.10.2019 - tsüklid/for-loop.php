<?php
//for-tsükkel - for(tjm = alg; tjm >= lopp_vaartus; tjm++) [tjm - tsükli juhtimis muutuja]
//              for(tjm = alg; tjm >= lopp_vaartus; tjm--)

for ($count = 1; $count <= 25; $count++) {
    echo $count;
    if ($count < 10) {
        echo "&nbsp;&nbsp;&nbsp;";
    } else {
        echo "&nbsp;";
    }
    echo "*<br>";
}