<?php


    // si j'ai un paramètre email et password en $_GET
        // je variabilise ces deux valeurs
        $email = $_GET["email"];

        $password = $_GET["password"];

    var_dump($email);

       /*  if (isset($_GET["name"])) {

            $id_product = $_GET["id_product"];
            $productFromIndex = null;
        
            foreach ($listProducts as $product) {
                if ($product["id"] == $id_product) {
                    $productFromIndex = $product;
                }
            }
        
        } */

    // si email = mail@mail.com et password = "toto
        // j'affiche un msg qui me dit :
            // Bienvenu sur votre compte, vous êtes connecté à l'adresse mail@mail.com

    if($email == "mail@mail.com" && $password == "toto") {
        echo "<h2> Bienvenue sur votre compte, vous êtes connecté à l'adresse $email </h2>";
    } else {
        echo " Mot de passe ou identifiant incorrect";
        echo "<a href='index.php'>retour a la base</a>";
        
    }

    // sinon
        // afficher un msg qui me dit 
            // Mot de passe ou identifiant incorrect
            // afficher un lien pour retourner dans index.php pour se connecter


?>