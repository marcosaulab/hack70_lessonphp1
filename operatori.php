<?php

// operatori: 
// matematici, di confronto, logici


// matematici
$somma = 2 + 2; // somma
$moltiplicazione = 2 * 2; // moltiplicazione
$divisione = 2 / 2; // divisione
$differenza = 2 - 2; // differenza

$mod = 2 % 2; // mod


// confronto
$x = 5;
$y = ' ';

$numero = 9;
$stringa = '9';

// var_dump($numero == $stringa); // qui confronto solo il valore

// var_dump($numero === $stringa); // qui confronto il valore e anche il tipo


// var_dump($numero != $stringa); 

// var_dump($numero !== $stringa);


// logici

// truthy
$num = 1;
$stringa = 'ciao';
$arrayX = [1,2,3];
$a = true;


// falsy
$num0 = 0;
$stringav = '';
$arrayXv = [];
$d = false;

// var_dump((bool) $num0);


// AND && -> è vera se tutti e 2 gli operatori sono veri altrimenti è falsa
// $and = $a && $b; 

// OR || -> è vera se almeno uno dei 2 operatori è vero
// $or = $a || $b;

// not ! -> se è vera resetituisce falsa
// $a = !$a;

$primo = '';

$secondo = 4;

var_dump($primo || $secondo);



?>