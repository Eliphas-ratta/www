<?php

// Déclaration d'une variable contenant une chaîne de caractères
$first_name = "Samih"; // $first_name contient la valeur "Samih"

// Affichage d'une chaîne en utilisant des guillemets doubles
echo "Hello  $first_name"; 
// Les guillemets doubles (" ") permettent l'interpolation de variables, 
// donc la valeur de $first_name sera insérée dans la chaîne.
// Affiche : Hello  Samih

// Ajout d'un saut de ligne HTML
echo "<br>"; 
// '<br>' insère une ligne vide dans l'affichage HTML pour une meilleure lisibilité.

// Affichage d'une chaîne en utilisant des apostrophes simples
echo 'Hello $first_name'; 
// Les apostrophes simples (' ') n'interpolent pas les variables.
// Cela signifie que '$first_name' sera affiché tel quel, sans remplacer la variable par sa valeur.
// Affiche : Hello $first_name

// Déclaration d'une nouvelle variable contenant une chaîne avec interpolation
$msg = "Hello  $first_name"; 
// Ici, la variable $msg contient la chaîne "Hello  Samih" grâce à l'interpolation des guillemets doubles.
// Cette variable n'est pas utilisée dans le reste du script, mais elle peut être utilisée pour un affichage ultérieur.

?>
