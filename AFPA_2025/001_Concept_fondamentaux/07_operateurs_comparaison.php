<?php 

    // Déclaration de deux variables avec des valeurs numériques
    $a = 10; // $a est initialisé à 10
    $b = 5;  // $b est initialisé à 5

    // Vérifie si $a est inférieur ou égal à $b
    echo $a <= $b; 
    // Cette condition retourne false (0) car 10 n'est pas inférieur ou égal à 5.
    // Affiche : 0

    // Vérifie si $a est strictement inférieur à $b
    echo $a < $b; 
    // Cette condition retourne false (0) car 10 n'est pas inférieur à 5.
    // Affiche : 0

    // Vérifie si $a est supérieur ou égal à $b
    echo $a >= $b; 
    // Cette condition retourne true (1) car 10 est supérieur à 5.
    // Affiche : 1

    // Vérifie si $a est strictement supérieur à $b
    echo $a > $b; 
    // Cette condition retourne true (1) car 10 est supérieur à 5.
    // Affiche : 1

    // Vérifie si $a est égal à $b (valeur uniquement)
    echo $a == $b; 
    // Cette condition retourne false (0) car 10 n'est pas égal à 5.
    // Affiche : 0

    // Vérifie si $a est strictement égal à $b (valeur et type)
    echo $a === $b; 
    // Cette condition retourne false (0) car 10 n'est pas égal à 5 et les types sont identiques (entiers).
    // Affiche : 0

    // Vérifie si $a est différent de $b (valeur uniquement)
    echo $a != $b; 
    // Cette condition retourne true (1) car 10 est différent de 5.
    // Affiche : 1

    // Vérifie si $a est strictement différent de $b (valeur ou type)
    echo $a !== $b; 
    // Cette condition retourne true (1) car 10 est différent de 5 (les valeurs diffèrent).
    // Affiche : 1

    // Vérifie si $a est différent de $b en utilisant l'opérateur alternatif `<>`
    echo $a <> $b; 
    // Cette condition est équivalente à `$a != $b` et retourne true (1) car 10 est différent de 5.
    // Affiche : 1

?>
