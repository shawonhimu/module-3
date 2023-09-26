<?php

$grades = [85, 92, 78, 88, 95];

function evenRemover($grades) {
    rsort($grades);
    print_r($grades);
}

echo "Resulting array in descending order:", PHP_EOL;
evenRemover($grades);
