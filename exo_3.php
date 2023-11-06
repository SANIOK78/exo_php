<?php 
    $weapons = ['fists', 'whip', 'gun'];
    $opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.

    echo $opponentWeapon."\n";

    $indyWeapon = $opponentWeapon;

    echo $indyWeapon;


/* 
PS C:\Users\Utilisateur\Desktop\testQuetes\php> php exo_3.php
fists
fists
PS C:\Users\Utilisateur\Desktop\testQuetes\php> php exo_3.php
gun
gun
PS C:\Users\Utilisateur\Desktop\testQuetes\php> php exo_3.php
fists
fists
*/