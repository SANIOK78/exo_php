<?php 
    $weapons = ['fists', 'whip', 'gun'];

    // Cela permet de choisir une arme de manière aléatoire.
    $opponentWeapon = $weapons[rand(0,2)];

    echo $opponentWeapon."\n";

    switch($opponentWeapon) {
        case 'fists':
            $indyWeapon = 'gun'; 
            echo "Le pistolet bat le poing \n" ;
            break;
        case 'whip' :
            $indyWeapon = 'fists'; 
            echo "Le poing bat le fouet \n" ;
            break;
        case 'gun' :
            $indyWeapon = 'whip'; 
            echo "Le fouet bat le pistolet \n" ;
            break;
        default: 
            echo "Cas pas pris en compte \n";
    }

    

    



