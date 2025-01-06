<?php

    // À l'intérieur de ce fichier, j'ai du code PHP.

    // echo "Samih"; 
    // Cette ligne est un commentaire et donc désactivée. Elle montre comment afficher du texte avec `echo`.

    // Déclaration d'une variable contenant une chaîne de caractères
    $first_name = "Albano"; 
    // La variable $first_name contient la valeur "Albano", qui sera utilisée plus tard dans le code HTML.
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Déclaration de l'encodage des caractères en UTF-8 pour supporter les caractères spéciaux -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Meta tag pour définir un affichage responsive adapté à tous les appareils -->
    <title>Document</title>
    <!-- Titre de la page affiché dans l'onglet du navigateur -->
</head>
<body>
    
<h1>HELLO <?php echo $first_name; ?></h1>
<!--
- Ce titre <h1> affiche "HELLO" suivi de la valeur de la variable $first_name grâce à l'instruction PHP `echo`.
- La valeur de $first_name, définie précédemment en PHP, est insérée dynamiquement dans le contenu HTML.
- Dans ce cas, le rendu affichera : HELLO Albano
-->

</body>
</html>
