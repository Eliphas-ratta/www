<?php
require_once("inc/init.php");




if (!isset($_SESSION["user"])) {
    header("location:connection.php");
    exit();
}

$member = $_SESSION["user"];

$id = $_SESSION["user"]["id"];
$stmt = $pdo->query("SELECT * FROM orders WHERE member_id = '$member[id]'");
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

require_once("inc/header.php");
?>

<!-- Body content -->

<div class="col-md-12 mb-5">
    <h2 class="text-center">Hi Mr <?= $member["last_name"] . " " . $member["first_name"]; ?>, welcome to your profile !</h2>
</div>

<div class="card col-md-4">
    <?php if($_SESSION["user"]["sexe"] == "m") { ?>
    <img src="pictures/avatar_male.png" class="card-img-top" alt="...">
    <?php }  else { ?>
        <img src="pictures/avatar_female.png" class="card-img-top" alt="...">
        <?php } ?>
    <div class="card-body">
        <h5 class="card-title"><?= $member["first_name"] . " " . $member["last_name"]; ?></h5>
    </div>

    <ul class="list-group list-group-flush">
        <li class="list-group-item text-center"><?= $member["email"]; ?></li>
        <li class="list-group-item text-center"><?= $member["address"]; ?></li>
        <li class="list-group-item text-center"><?= $member["postal_code"] . " " . $member["city"] ?></li>
    </ul>
</div>

<div class="col-md-4">
    <ul class="list-group">
        <li class="list-group-item text-center">
            <h5>My orders</h5>
        </li>

        <?php foreach ($orders as $order) { 
            
            if($order["state"] == "en cours de traitement") {
            
            ?>
            
            
        <li class="list-group-item text-center">
            <p>Order n°<?= $order["id"] ?> from the <?= $order["created_at"] ?></p>
            <p class="badge badge-warning"> In progress</p>
        </li>

        <?php }
     } ?>

    </ul>

    <ul class="list-group mt-5">
        <li class="list-group-item text-center">
            <h5>All my orders</h5>
        </li>


        <?php 

        foreach($orders as $order) {

            if($order["state"] != "en cours de traitement") {?>
            <li class="list-group-item text-center">
                <p>Order n°<?= $order["id"] ?> from the <?= $order["created_at"] ?></p>
                <p class="badge badge-success"> <?= $order["state"]; ?> </p>
            </li>
           <?php }
        } ?>
    </ul>
</div>


<?php
require_once("inc/footer.php");
?>