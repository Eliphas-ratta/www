<?php 

$a = 10; // $a est initialisé avec la valeur 10
$b = 5;  // $b est initialisé avec la valeur 5

// Affiche le résultat d'une expression combinée avec l'opérateur logique AND (`&&`)
echo $a <= $b && $a > 3; 
// La condition combine deux comparaisons :
// 1. `$a <= $b` : Vérifie si $a est inférieur ou égal à $b (10 <= 5), retourne false.
// 2. `$a > 3` : Vérifie si $a est supérieur à 3 (10 > 3), retourne true.
// Résultat : false && true => false
// Affiche : rien ou 0 (car false n'est pas explicitement affiché).
// true && true => true
// true && false => false
// false && true => false
// false && false => false

$nationality = "spannish"; // La variable $nationality contient la chaîne "spannish" (notez l'orthographe incorrecte).

// Affiche le résultat d'une expression avec l'opérateur logique OR (`||`)
echo $nationality == "english" || $nationality == "spanish"; 
// La condition vérifie deux cas :
// 1. `$nationality == "english"` : Vérifie si $nationality est "english" (retourne false).
// 2. `$nationality == "spanish"` : Vérifie si $nationality est "spanish" (retourne false à cause de l'orthographe incorrecte).
// Résultat : false || false => false
// Affiche : rien ou 0 (car false n'est pas explicitement affiché).

// XOR 
// Utilisation de l'opérateur logique XOR (exclusif OR)
echo $nationality == "mexican" xor $nationality == "spanish"; 
// La condition vérifie deux cas :
// 1. `$nationality == "mexican"` : Vérifie si $nationality est "mexican" (retourne false).
// 2. `$nationality == "spanish"` : Vérifie si $nationality est "spanish" (retourne false à cause de l'orthographe incorrecte).
// XOR retourne true si une seule des deux conditions est vraie, mais pas les deux.
// Résultat : false XOR false => false
// Affiche : rien ou 0 (car false n'est pas explicitement affiché).

?>
