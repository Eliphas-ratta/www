<?php
require_once("inc/header.php"); // Inclusion de l'en-tête du site

// Vérification si le formulaire a été soumis
if ($_POST) {
    // Sécurisation des données entrées par l'utilisateur (suppression des espaces et des caractères spéciaux)
    $pseudo = htmlspecialchars(trim($_POST["pseudo"]));
    $password = htmlspecialchars(trim($_POST["password"]));

    try {
        // Requête SQL pour récupérer les informations du membre correspondant au pseudo
        $stmt = $pdo->query("SELECT * FROM member WHERE pseudo = '$pseudo'");
        $member = $stmt->fetch(PDO::FETCH_ASSOC); // Récupération des résultats sous forme associative
        
        // Vérification du mot de passe saisi avec le mot de passe haché dans la base de données
        if (password_verify($password, $member["password"])) {
            // Stockage des informations de l'utilisateur dans la session
            $_SESSION["user"]["id"] = $member["id"];
            $_SESSION["user"]["pseudo"] = $member["pseudo"];
            $_SESSION["user"]["first_name"] = $member["first_name"];
            $_SESSION["user"]["last_name"] = $member["last_name"];
            $_SESSION["user"]["sexe"] = $member["sexe"];
            $_SESSION["user"]["email"] = $member["email"];
            $_SESSION["user"]["address"] = $member["address"];
            $_SESSION["user"]["status"] = $member["status"];
            $_SESSION["user"]["city"] = $member["city"];
            $_SESSION["user"]["postal_code"] = $member["postal_code"];
            
            // Redirection vers la page de profil
            header("location:profile.php");
        } else {
            // Message d'erreur si le pseudo ou le mot de passe est incorrect
            $msg = "<div class='alert alert-warning'>
            Pseudo ou mot de passe incorrect
            </div>";
        }
    } catch (PDOException $e) {
        // Message d'erreur en cas de problème avec la requête SQL ou la base de données
        $msg = "<div class='alert alert-warning'>
        ERREUR SERVEUR :" . $e->getMessage() . "
        </div>";
    }
}
?>

<!-- Contenu HTML de la page -->

<div class="col-md-12">
    <h3 class="text-center mb-5">Get connected to access your profile!</h3>
</div>

<div class="col-md-5">
    <!-- Affichage du message d'erreur (s'il y en a) -->
    <?= $msg; ?>
    <!-- Formulaire de connexion -->
    <form method="POST" action="">
        <div class="form-group">
            <label for="pseudo">Pseudo:</label>
            <input type="text" class="form-control" id="pseudo" aria-describedby="pseudo" name="pseudo" placeholder="Enter your pseudo">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="pseudo" placeholder="Enter your password">
        </div>
        <button type="submit" class="btn btn-dark">Connection</button>
    </form>
</div>

<?php
require_once("inc/footer.php"); // Inclusion du pied de page
?>
