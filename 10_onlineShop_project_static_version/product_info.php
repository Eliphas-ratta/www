<?php
require_once("inc/init.php");

if (isset($_GET["id_product"])) {
   $id= $_GET["id_product"];

   $stmt = $pdo->query("SELECT * FROM product WHERE id = '$id' ");
   $product = $stmt->fetch(PDO::FETCH_ASSOC);
   
} else {
    header("location:index.php");
    exit();
}

/* var_dump($product); */
/* var_dump($categories); */
require_once("inc/header.php");
?>

<!-- Body content -->

<div class="card col-md-4">
    <img src="pictures/<?= $product["picture"]; ?>" class="card-img-top" alt="Black t-shirt">
    <div class="card-body">
        <h5 class="card-title"><?= $product["title"]; ?></h5>
        <p class="card-text"><?= $product["description"]; ?></p>
    </div>
</div>

<div class="col-md-4">
    <ul class="list-group">
        <li class="list-group-item">Catégorie : <?= $product["category"]; ?></li>
        <li class="list-group-item">Couleur : <?= $product["color"]; ?></li>
        <li class="list-group-item">Taille : <?= $product["size"]; ?></li>
        <li class="list-group-item">Prix : <?= $product["price"]; ?></li>

        <form method="POST" action="cart.php">
            <input type="hidden" name="id_product" value="<?= $product["id"]; ?>">
            <li class="list-group-item">
                <p>Quantity :</p>
                <select class="custom-select" name="quantity" id="exampleFormControlSelect1">
                <?php  for ($i=1; $i <= $product["stock"]; $i++) { ?>
                
                    
                    <option value="<?= $i ?>"><?= $i ?></option>
                    
              
                <?php } ?>
                </select>
            </li>

            <input type="submit" name="addToCart" class="btn btn-outline-secondary mt-5 w-100"  value="Add to cart">

        </form>

    </ul>
</div>

<?php
require_once("inc/footer.php");
?>