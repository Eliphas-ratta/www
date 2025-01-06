<?php

//construire un tableau de 10 lignes
// avec 5 cellules par ligne en php
// chaque ligne devra afficher un chiffre dont la valeur
//incrementera dans chaque cellule





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body>

<table>
  <tbody>
<?php
for ($i=0; $i < 10; $i++) {

    echo "<tr>";

    for ($i=0; $i < 5; $i++) {
        echo "<td>$count</td>";
        $count++;
    }
    echo "</tr>";
}
?>

  </tbody>

</table>

</body>



</body>
</html>