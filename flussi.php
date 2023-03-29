<?php

// algoritmo: sequenza di passaggi o comandi o istruzioni eseguita in un determinato ordine per risolvere un problema

// 1 - prendere la pasta
// 2 - far bollire l'acqua 
// 3 - mettere la pasta nell'acqua che bolle


// * sequenza

use const PHPSTORM_META\ANY_ARGUMENT;

$num1 = 2;
$num2 = 3;
$sum = $num1 + $num2;

// selezione
// comandi di selezione: if()..., if()...else, if()...else if()...else, switch

// $eta = 12;

// può andare alle scuole medie?
// if
// if($eta >= 10) {
//     echo "Puoi andare alle scuole medie";
// } 

// if else
// if ($eta >= 10) {
//     echo "Puoi andare alle scuole medie";
// } else {
//     echo "NON puoi andare alle scuole medie";
// }

// if else if
// if ($eta >= 10) {
//     echo "Puoi andare alle scuole medie";
// } else if ($eta < 10) {
//     echo "NON Puoi andare alle scuole medie";
// }

// switch
// switch($eta) { 
//     case $eta >= 10:
//         echo "Puoi andare alle scuole medie";
//         break;
//     case $eta < 10:
//         echo "NON Puoi andare alle scuole medie";
//         break;
//     default:
//         echo "non so cosa fare";
//         break;
// }


//  * ITERAZIONI -> è una struttura che ci consente di ripetere una porzione di codice più volte

// for

// for($i=0;  $i<=5;  $i++){
//     // 0, 1, 2, 3 ... 5 ... 6
//     echo "Ciao ";

// }


// while
// $i = 0;
// while($i < 6) {
//     echo "ciao";
//     $i++;
// }

// do while
// $i = 8;
// do{ 
//     echo $i;
// } while($i < 6)


// stampare tutti gli elementi di un array

$studenti = [
    'Anna', 
    'Marco', 
    'Giorgio'
];

// for($i=0;$i<count($studenti);$i++) {
//     // $i = 0;  $studenti[0] => Anna
//     // $i = 1; $studenti[1] => Marco
//     // $i = 2; $studenti[2] => Giorgio
//     echo $studenti[$i]."\n";
// }


// foreach -> una funzione che prende in pasto un array e lo cicla.
// Alla variabile dopo l'as viene assegnato un elemento dell'array

foreach($studenti as $studente) {
    echo "Ciao ".$studente."\n";
}






?>