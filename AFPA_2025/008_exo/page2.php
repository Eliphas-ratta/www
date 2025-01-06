<?php

    var_dump($_GET);

    $content = "";

    // si j'ai un paramètre email et password en $_GET
    // je variabilise ces deux valeurs
    if(isset($_GET["pseudo"]) && isset($_GET["password"])) {

        $email = $_GET["pseudo"];
        $password = $_GET["password"];

            // si pseudo = mail@mail.com et password = "toto

        if($pseudo == "Eliphas" && $password = "toto") {
            // j'affiche un msg qui me dit :
                // Bienvenu sur votre compte, vous êtes connecté à l'adresse mail@mail.com
            $content = "<p>Bienvenu sur votre compte, vous êtes connecté à l'adresse $pseudo</p>";
        } else {

            // sinon
                // afficher un msg qui me dit 
                    // Mot de passe ou identifiant incorrect
                    // afficher un lien pour retourner dans index.php pour se connecter
            
            $content = "<p>Mot de passe ou identifiant incorrect;</p> <a href=\"index.php\">Se connecter</a>";
        }

    }

?>