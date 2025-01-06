<?php


define(constant_name: 'CAPITALE',value: 'Paris');

echo CAPITALE;

// Affiche le chemin complet et le nom du fichier actuel
echo __FILE__ . '<br>'; 
// __FILE__ est une constante magique qui contient le chemin complet (absolu) du fichier en cours d'exécution.
// '<br>' est utilisé pour insérer un saut de ligne HTML après l'affichage.

// Affiche le chemin complet du dossier contenant le fichier actuel
echo __DIR__ . '<br>';
// __DIR__ est une constante magique qui contient le chemin complet (absolu) du répertoire où se trouve le fichier en cours d'exécution.
// '<br>' est utilisé pour insérer un saut de ligne HTML après l'affichage.

// Affiche le numéro de la ligne actuelle dans le fichier
echo __LINE__ . '<br>';
// __LINE__ est une constante magique qui contient le numéro de la ligne actuelle dans le fichier.
// '<br>' est utilisé pour insérer un saut de ligne HTML après l'affichage.



?>