<?php 
/*
Creiamo un array 'matches' contenente altri array i
quali rappresentano delle partite di basket di
un’ipotetica tappa del calendario. Ogni array della
partita avrà una squadra di casa e una squadra
ospite, punti fatti dalla squadra di casa e punti fatti
dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo
schema:
Olimpia Milano - Cantù | 55 - 60
*/


$matches = [
    'partita1' => [
        'squadra_casa' => 'olimpia milano',
        'squadra_ospite' => 'Cantù',
        'punti_casa' => 55,
        'punti_ospiti' => 63
    ],
    'partita2' => [
        'squadra_casa' => 'fortitudo bologna',
        'squadra_ospite' => 'Virtus bologna',
        'punti_casa' => 38,
        'punti_ospiti' => 52
    ],
    'partita3' => [
        'squadra_casa' => 'dinamo',
        'squadra_ospite' => 'allianz trieste',
        'punti_casa' => 68,
        'punti_ospiti' => 46
    ]
    ];


foreach ($matches as $partita) {
    echo $partita['squadra_casa']. " - " .$partita['squadra_ospite']. " | " .$partita['punti_casa']. " - " .$partita['punti_ospiti'].'<br>';
}

?>