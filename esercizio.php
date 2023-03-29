<?php

// dato un array di sviluppatori

$sviluppatori = [
    "frontend" => [
        "Anna", 
        "John", 
        "Jack"
    ],
    "backend" => [
        "Roger", 
        "Bill", 
        "Carlos"
    ]
];

// come faccio a STAMPARE:
// Gli sviluppatori frontend sono: Anna, John, Jack
// Gli sviluppatori backend sono: Roger, Bill, Carlos

foreach($sviluppatori as $key => $sviluppatore) {
    echo "Gli sviluppatori $key sono \n";
    foreach($sviluppatore as $nome) {
        echo $nome."\n";
    }
}

// ESERCIZIO:

// come faccio a stampare solo gli studenti che hanno superato il compito OVVERO quelli che hanno almeno 6? 
//  e quelli che non lo hanno superato?

$studenti = [
    [
        'nome' => 'Bruno',
        'voto' => 2,
    ],
    [
        'nome' => 'Giorgia',
        'voto' => 6,
    ],
    [
        'nome' => 'Piero',
        'voto' => 8,
    ],
];

?>