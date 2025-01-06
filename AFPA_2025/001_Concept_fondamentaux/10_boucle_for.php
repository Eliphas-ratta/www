<?php 

    // Boucle `for` qui s'exécute 5 fois
    for ($i=0; $i < 5; $i++) { 
        // La variable $i commence à 0, et la boucle continue tant que $i est inférieur à 5.
        // À chaque itération, $i est incrémenté de 1 grâce à `$i++`.
        echo "bouche n° $i"; 
        // Affiche "bouche n°" suivi de la valeur actuelle de $i à chaque itération.
    }

    // Déclaration d'un tableau contenant trois noms
    $names = ["Ihor", "Eliott", "Walid"]; 
    // Le tableau $names contient les chaînes de caractères "Ihor", "Eliott" et "Walid".

    // Boucle `for` pour parcourir les éléments du tableau
    for ($i=0; $i < count(value: $names); $i++) { 
        // La boucle parcourt les indices du tableau de 0 à `count($names) - 1`.
        // La fonction `count(value: $names)` retourne le nombre d'éléments dans $names (ici, 3).
        echo "Hello " . $names[$i] . "<br>"; 
        // Affiche "Hello " suivi du nom correspondant à l'indice $i dans le tableau.
        // Ajoute également un saut de ligne HTML (`<br>`) après chaque nom.
    }

?>
