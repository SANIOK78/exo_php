<?php 
    $movies = [
        "Les Aventuriers de l'arche perdue" => ['Harrison Ford', 'Karen Allen', 'Paul Freeman'],
        "Indiana Jones et le Temple maudit" => ['Harrison Ford', 'Kate Capshaw', 'Ke Huy Quan'],
        "Indiana Jones 5" => ['Harrison Ford', 'Phoebe Waller-Bridge', 'Antonio Banderas' ]
    ];

    foreach($movies as $titreMovie => $actors) {

        echo "Dans le film ". $titreMovie. " , les principaux acteurs sont : \n";

        foreach($actors as $actor) {
            echo " - ".$actor . "\n";
        }
    }

?>

<!-- 
Dans le film Les Aventuriers de l'arche perdue , les principaux acteurs sont :
 - Harrison Ford
 - Karen Allen
 - Paul Freeman
Dans le film Indiana Jones et le Temple maudit , les principaux acteurs sont :
 - Harrison Ford
 - Kate Capshaw
 - Ke Huy Quan
Dans le film Indiana Jones 5 , les principaux acteurs sont :
 - Harrison Ford
 - Phoebe Waller-Bridge
 - Antonio Banderas
-->