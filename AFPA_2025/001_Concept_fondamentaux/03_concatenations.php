<?php 

// Concatenation de deux chaînes de caractères
$txt = "ihor" . "shemett"; 
// L'opérateur `.` permet de concaténer (assembler) deux chaînes.
// Ici, "ihor" et "shemett" sont combinés pour former une seule chaîne : "ihorshemett".
// $txt contient la valeur "ihorshemett".

// Déclaration d'une variable contenant une chaîne de caractères
$x = "Hello"; 
// $x contient la valeur "Hello".

// Déclaration d'une autre variable contenant une chaîne de caractères
$y = "world"; 
// $y contient la valeur "world".

// Ajout (concaténation) de la valeur de $y à la variable $x
$x .= $y; 
// L'opérateur `.=` est une forme abrégée de `$x = $x . $y`.
// Cela signifie que la valeur de $y ("world") est ajoutée à la fin de $x ("Hello").
// Après cette opération, $x contient la valeur "Helloworld".

?>
