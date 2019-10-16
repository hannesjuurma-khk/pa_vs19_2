<?php
/*
//define variables
$numberOne = $_GET["numberOne"];
$numberTwo = $_GET["numberTwo"];

if(strlen($numberOne) > 0 and strlen($numberTwo) > 0 and $numberTwo != 0) {
    echo "Andmed olemas";

}else if ($numberTwo == 0 and strlen($numberOne) > 0 and strlen($numberTwo) > 0) {
        echo "Jagaja ei saa olla 0";
} else {
    echo "Sisesta mõlemad numbrid";
}
*/
?>

<?php
//define variables
$numberOne = $_GET["numberOne"];
$numberTwo = $_GET["numberTwo"];
var_dump($numberTwo);
if (strlen($numberOne) > 0 and strlen($numberTwo) > 0 and $numberTwo != 0) {
    $divide = $numberOne / $numberTwo;
    echo "Jagatis on: " . round($divide, 3);
} else if ($numberTwo == "0") {  //Kasutaja sisestatud 0 on võrdne string'iga "0"
    echo "Jagaja ei saa olla 0";
} else {
    echo "Sisesta mõlemad numbrid";
}
?>
