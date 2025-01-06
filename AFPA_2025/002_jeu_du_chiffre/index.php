<?php

$random1 = mt_rand(0,10);






for ($i=0; $i < 3; $i++) {
    $random2 = mt_rand(0,10);
    if($random2 == $random1) {
        break;
    } else {
        continue;
    }
}



/* $winorlose = if($random1 == $random2) {
    echo "tu as deviné";
} else {
    echo "tu as perdu";
} */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<main>

<h1>JEU DU CHIFFRE</h1>

<p>L'ordinateur a choisis : <?php echo "$random1" ?></p>
<p>Vous avez choisis : <?php echo "$random2" ?></p>
<p>Tour restant : <?php echo "$i" ?></p>
<p> <?php  echo ( $random1 == $random2) ? "gagné" : "perdu"; ?></p>


</main>



</body>
</html>