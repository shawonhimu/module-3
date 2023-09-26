<?php

$grades = [85, 92, 78, 88, 95];

function evenRemover($gradeVal) {
    rsort($gradeVal);
    print_r($gradeVal);
}

echo "Resulting array in descending order:", PHP_EOL;
evenRemover($grades);
