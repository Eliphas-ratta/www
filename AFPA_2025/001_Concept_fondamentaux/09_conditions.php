<?php

$nationality = "ukrainian"; // La variable $nationality est initialisée avec la valeur "ukrainian".

// Condition IF pour vérifier la nationalité
if($nationality == "ukrainian" && $nationality != "morrocan") { 
    // Vérifie si $nationality est "ukrainian" ET n'est pas "morrocan".
    echo "Priviet"; 
    // Si les deux conditions sont vraies, affiche "Priviet".
} else if ($nationality == "spanish") { 
    // Sinon, vérifie si $nationality est "spanish".
    echo "hola"; 
    // Si vrai, affiche "hola".
} else {
    echo "hello"; 
    // Si aucune des conditions précédentes n'est remplie, affiche "hello".
}

// consitions ternaire
$language = ($nationality == "ukrainian") ? "ukainian" : "english"; 
// Utilise l'opérateur ternaire pour affecter une valeur à $language :
// Si $nationality est "ukrainian", $language reçoit "ukainian". Sinon, il reçoit "english".

echo ( $nationality == "ukrainian") ? "ukrainian" : "english"; 
// Affiche "ukrainian" si $nationality est "ukrainian", sinon affiche "english".


$color = "yellow"; // La variable $color est initialisée avec la valeur "yellow".

// Utilisation d'une structure switch pour vérifier la valeur de $color
switch ($color) {
    case 'blue'; 
    // Vérifie si $color est égal à "blue".
    echo "your fav color is blue"; 
    // Si la condition est vraie, affiche "your fav color is blue".
    break; 
    // Le mot-clé `break` arrête l'exécution du switch après l'exécution du code de ce cas.

    case 'green:'; 
    // Attention : il y a une erreur de syntaxe ici (":" ne doit pas être dans la chaîne).
    // Cela devrait être `case 'green':`.
    echo "your fav color is green"; 
    // Si $color est égal à "green", affiche "your fav color is green".
    break; 
    // Arrête l'exécution après ce cas.

    default: 
    // Exécuté si aucune des valeurs des `case` ne correspond à celle de $color.
    echo "I don't know your color"; 
    // Affiche : "I don't know your color".
    break; 
    // Fin du switch (le `break` n'est pas nécessaire ici, mais il est permis).
}
?>

