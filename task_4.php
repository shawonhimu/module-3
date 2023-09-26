<?php

$studentGrades = [
    //Student one
    "Student-One" => [
        "Math" => 90,
        "English" => 87,
        "Science" => 85,
    ],
    // Student two
    "Student-Two" => [
        "Math" => 70,
        "English" => 83,
        "Science" => 82,
    ],
    //Student three
    "Student-Three" => [
        "Math" => 85,
        "English" => 78,
        "Science" => 75,
    ],
];

function calculateAvgGrades($subjectGrades) {
    $calculatedAvgGrade = array_sum($subjectGrades) / count($subjectGrades);
    $roundedAvgGrade = round($calculatedAvgGrade, 2);
    return $roundedAvgGrade;
}

$avgResults = array_map('calculateAvgGrades', $studentGrades);

foreach ($avgResults as $studentKey => $avgResult) {
    echo "Average grade {$studentKey}: {$avgResult}", PHP_EOL;
}
