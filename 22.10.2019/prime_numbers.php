<?php

function isPrime($number)
{
    if ($number < 2) {
        return "This number is not valid";
    } else {
        $divider = 2;
        while ($number % $divider != 0) {
            $divider++;
        }
        if ($number == $divider) {
            return $number . " is a prime number";

        } else {
            return $number . " is not prime number";
        }
    }
}

//use function
$result = isPrime(rand(1, 10));
echo $result;