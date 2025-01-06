<?php

// Affichage d'une chaîne de caractères simple
echo "word"; 
// Affiche : word

// Affichage du résultat d'une addition
echo 1+2; 
// Effectue l'opération 1 + 2 et affiche le résultat : 3

// Affichage d'un nombre à virgule flottante
echo 22.99; 
// Affiche : 22.99

// Ajout d'un saut de ligne HTML
echo "<br>"; 
// '<br>' insère une ligne vide dans l'affichage HTML pour séparer les éléments visuellement.

// Affichage d'un paragraphe HTML
echo "<p> Mon text </p>"; 
// Affiche : Mon text dans un paragraphe HTML formaté.

// Utilisation de la fonction `print` pour afficher une chaîne
print("Hello World"); 
// `print` est similaire à `echo`, mais il retourne toujours une valeur (1). 
// Ici, il affiche : Hello World

// Déclaration d'un tableau contenant différents types de données
$list = ["34", 44, true, ['val1', 'val2']]; 
// $list est un tableau contenant :
// - Une chaîne de caractères ("34")
// - Un entier (44)
// - Un booléen (true)
// - Un tableau imbriqué avec deux éléments : 'val1' et 'val2'

// Affichage du tableau avec la fonction `print_r`
echo "<pre>"; 
print_r(value: $list); 
echo "</pre>"; 
// `print_r` affiche une représentation lisible du tableau.
// `<pre>` permet d'appliquer un formatage préformaté au texte, ce qui rend l'affichage plus structuré.

// Affichage du tableau avec la fonction `var_dump`
echo "<pre>"; 
var_dump(value: $list); 
echo "</pre>"; 
// `var_dump` affiche des informations détaillées sur le tableau, y compris les types des éléments et leur contenu.
// Par exemple, il affichera les types (string, int, bool) et les valeurs associées à chaque élément.
// `<pre>` formate également la sortie pour une meilleure lisibilité.

?>
