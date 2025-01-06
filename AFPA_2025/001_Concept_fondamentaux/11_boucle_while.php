<?php

    $i = 0; 
    // Initialisation de la variable $i avec la valeur 0.
    // Cette variable sert de compteur pour la boucle `while`.

    while($i < 5) { 
        // La boucle `while` s'exécute tant que la condition `$i < 5` est vraie.
        // Ici, la boucle s'exécutera pour les valeurs de $i allant de 0 à 4 inclus.

        echo "Hello n° $i"; 
        // Affiche "Hello n°" suivi de la valeur actuelle de $i.
        // À chaque itération, un nouveau message est affiché avec un numéro différent.

        $i++; 
        // Incrémentation de $i de 1 à chaque itération.
        // Cette étape est essentielle pour éviter une boucle infinie, car elle rapproche $i de la condition de sortie.
    }

?>
