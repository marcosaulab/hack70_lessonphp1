<?php

// Array: lista ordinata di elementi


$persone_1 = array("Anna", "Martina", "Leo"); // -> modo vecchio
$people = ["Anna", "Martina", "Leo"];

$arrayA = [1,2,3,4,5]; // -> omogeneo

$arrayB = ["Anna", 23, true]; // -> eterogeneo



// per stampare array uso var_dump() o print_r()

$persone = [
    "Anna", // posizione 0
    "Martina", // posizione 1
    "Leo" // posizione 2
];

$arrayC = [
    "Anna",
    23,
    true,
    [1, 2, 3]
];

$studenti = [
    'uno' => 'Andrea',
    'due' => 'Marco',
    'ciaone' => 'Anna'
];

var_dump($studenti['ciaone']);

?>