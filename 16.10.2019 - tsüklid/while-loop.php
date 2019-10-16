<?php

$number = 1;
while ($number <= 5) {
    echo $number;
    echo "<br>";
    $number++;
}

echo "<hr>";

$number = 1;
do {
    echo $number;
    echo "<br>";
    $number++;
} while ($number <= 5);

//PI Kalkuleerimine

$maxCount = 1000;
$count = 1;
$sum = 0;

while ($count <= $maxCount) {
    //create element
    $element = 1 / (2 * $count - 1);
    //if count is poistive
    if ($count % 2 != 0) {
        $sum = $sum + $element;
    } else {
        $sum = $sum - $element;
    }
    //increase count number ++
    $count++;
}

echo "pi =" . ($sum * 4) . "<br>";
echo "pi = " . pi();