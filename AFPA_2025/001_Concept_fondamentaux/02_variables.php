<?php

// Déclaration d'une variable contenant une chaîne de caractères
$myVar = "text"; // $myVar contient la valeur "text"

// Déclaration d'une variable contenant un entier
$nbr = 22; // $nbr contient la valeur 22

// Déclaration d'une variable contenant un booléen
$pgm = true; // $pgm contient la valeur booléenne true

// Déclaration d'une variable contenant un tableau avec un élément de type float
$nbrs = [22.99]; // $nbrs est un tableau contenant une seule valeur, un nombre à virgule flottante (22.99)

// Affichage de la variable $myVar suivi d'un saut de ligne HTML
echo $myVar . "<br>"; // Affiche : text<br>

// Affichage du type de la variable $pgm
echo gettype(value: $pgm); // Affiche : boolean (car $pgm contient true)

// Modification de la valeur de la variable $nbr
$nbr = 29; // La valeur de $nbr est mise à jour à 29

// Affichage de la nouvelle valeur de $nbr
echo $nbr; // Affiche : 29

?>
