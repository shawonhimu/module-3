<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function evenRemover($num) {
    return $num % 2 != 0;
}

$evenNumbers = array_filter($numbers, 'evenRemover');

echo "Resulting array without even numbers :", PHP_EOL;
print_r($evenNumbers);

echo "Resulting all values of the array without even numbers : ", PHP_EOL;
foreach ($evenNumbers as $evenNumber) {
    echo $evenNumber, PHP_EOL;
}