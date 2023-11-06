<?php
$movies = [
    "Les Aventuriers de l'arche perdue" => 1981,
    "Indiana Jones et le Temple maudit" => 1984,
    "Indiana Jones 5" => 2023
];

//  "ksort()"  => Permet d'effectuer un tri sur les 
// clés en gardant les valeurs intactes
ksort($movies);

foreach($movies as $key => $yearMovie) {

    echo $yearMovie . " - " . $key . "\n";

}

