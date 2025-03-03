<?php
require_once("../inc/init.php");

$id_product = isset($id_product) ? $id_product : "";
$reference = isset($reference) ? $reference : "";
$price = isset($price) ? $price : "";
$stock = isset($stock) ? $stock : "";
$category = isset($category) ? $category : "";
$public = isset($public) ? $public : "";
$size = isset($size) ? $size : "";
$picture = isset($picture) ? $picture : "";
$color = isset($color) ? $color : "";
$title = isset($title) ? $title : "";
$description = isset($description) ? $description : "";


if (isset($_GET["action"]) && isset($_GET["id_product"])) {
    $id_product = (int) $_GET["id_product"]; 

    if ($_GET["action"] == "modify") {
 
        $stmt = $pdo->prepare("SELECT * FROM product WHERE id = :id_product");
        $stmt->execute([':id_product' => $id_product]);
        $product = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($product) {
            $reference = $product["reference"];
            $price = $product["price"];
            $stock = $product["stock"];
            $category = $product["category"];
            $public = $product["public"];
            $size = $product["size"];
            $picture = "../pictures/" . $product["picture"]; 
            $color = $product["color"];
            $title = $product["title"];
            $description = $product["description"];
        } else {
            echo "<div class='alert alert-danger'>Le produit n'existe pas.</div>";
        }
    } elseif ($_GET["action"] == "delete") {
        $stmt = $pdo->prepare("DELETE FROM product WHERE id = :id_product");
        $stmt->execute([':id_product' => $id_product]);

        if ($stmt->rowCount() > 0) {
            echo "<div class='alert alert-success'>Le produit a été supprimé avec succès.</div>";
        } else {
            echo "<div class='alert alert-danger'>Erreur lors de la suppression du produit.</div>";
        }
    }
}

if ($_POST) {
    $id_product = $_POST["id_product"] ?? null;
    $reference = htmlspecialchars(trim($_POST["reference"]));
    $price = htmlspecialchars(trim($_POST["price"]));
    $stock = htmlspecialchars(trim($_POST["stock"]));
    $category = htmlspecialchars(trim($_POST["category"]));
    $public = htmlspecialchars(trim($_POST["public"]));
    $size = htmlspecialchars(trim($_POST["size"]));
    $description = htmlspecialchars(trim($_POST["description"]));
    $title = htmlspecialchars(trim($_POST["title"]));
    $color = htmlspecialchars(trim($_POST["color"]));

    $picture = "";
    if (!empty($_FILES["myPicture"]["name"])) {
        $uploadDir = "../pictures/";
        $picture = basename($_FILES["myPicture"]["name"]);
        $uploadFile = $uploadDir . $picture;
        move_uploaded_file($_FILES["myPicture"]["tmp_name"], $uploadFile);
    } elseif (isset($_POST["prevPicture"])) {
        $picture = basename($_POST["prevPicture"]);
    }

    if (isset($_POST["addProduct"])) {
        $stmt = $pdo->prepare("INSERT INTO product (reference, price, stock, category, public, size, picture, color, title, description) 
                              VALUES (:reference, :price, :stock, :category, :public, :size, :picture, :color, :title, :description)");
        $stmt->execute([
            ':reference' => $reference,
            ':price' => $price,
            ':stock' => $stock,
            ':category' => $category,
            ':public' => $public,
            ':size' => $size,
            ':picture' => $picture,
            ':color' => $color,
            ':title' => $title,
            ':description' => $description
        ]);

        echo "<div class='alert alert-success'>Le produit a été ajouté avec succès.</div>";
    } elseif (isset($_POST["modifyProduct"])) {

        $stmt = $pdo->prepare("UPDATE product 
                              SET reference = :reference, price = :price, stock = :stock, category = :category, public = :public, 
                                  size = :size, picture = :picture, color = :color, title = :title, description = :description
                              WHERE id = :id_product");
        $stmt->execute([
            ':reference' => $reference,
            ':price' => $price,
            ':stock' => $stock,
            ':category' => $category,
            ':public' => $public,
            ':size' => $size,
            ':picture' => $picture,
            ':color' => $color,
            ':title' => $title,
            ':description' => $description,
            ':id_product' => $id_product
        ]);

        echo "<div class='alert alert-success'>Le produit a été modifié avec succès.</div>";
    }
}

$stmt = $pdo->query("SELECT * FROM product");
require_once("inc/header.php");
?>

<table class="table">
    <thead>
        <tr>
            <?php
            for ($i = 0; $i < $stmt->columnCount(); $i++) {
                $infoColumn = $stmt->getColumnMeta($i);
                echo "<th>" . $infoColumn['name'] . "</th>";
            }
            ?>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $product) { ?>
            <tr>
                <?php
                foreach ($product as $index => $info) {
                    if ($index == "picture") {
                        echo "<td><img src='../pictures/" . $info . "' width='50' height='50' alt='' /></td>";
                    } else {
                        echo "<td>$info</td>";
                    }
                }
                ?>
                <td><a href="?id_product=<?= $product["id"]; ?>&action=modify">Modifier</a></td>
                <td><a href="?id_product=<?= $product["id"]; ?>&action=delete">Supprimer</a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<form id="form" action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id_product" value="<?= $id_product; ?>">
    <input type="hidden" name="prevPicture" value="<?= $picture; ?>">

    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="reference">Reference</label>
            <input type="text" class="form-control" id="reference" value="<?= $reference; ?>" name="reference">
        </div>
        <div class="form-group col-md-3">
            <label for="category">Category</label>
            <input type="text" class="form-control" id="category" value="<?= $category; ?>" name="category">
        </div>
        <div class="form-group col-md-3">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" value="<?= $title; ?>" name="title">
        </div>
        <div class="form-group col-md-3">
            <label for="color">Color</label>
            <input type="text" class="form-control" id="color" value="<?= $color; ?>" name="color">
        </div>
        <div class="form-group col-md-3">
            <label for="size">Size</label>
            <input type="text" class="form-control" id="size" value="<?= $size; ?>" name="size">
        </div>
        <div class="form-group col-md-3">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" value="<?= $price; ?>" name="price">
        </div>
        <div class="form-group col-md-3">
            <label for="stock">Stock</label>
            <input type="text" class="form-control" id="stock" value="<?= $stock; ?>" name="stock">
        </div>
        <div class="form-group col-md-2">
            <label for="public_m">Public</label>
            <div class="custom-control custom-radio">
                <input type="radio" id="public_m" name="public" class="custom-control-input" value="m" <?= ($public == "m") ? "checked" : ""; ?>>
                <label class="custom-control-label" for="public_m">Male</label>
            </div>
        </div>
        <div class="form-group col-md-2">
            <label for="public_f" style="color:transparent">Public</label>
            <div class="custom-control custom-radio">
                <input type="radio" id="public_f" name="public" class="custom-control-input" value="f" <?= ($public == "f") ? "checked" : ""; ?>>
                <label class="custom-control-label" for="public_f">Female</label>
            </div>
        </div>
        <div class="custom-file mb-5">
            <input type="file" class="custom-file-input" id="myPicture" name="myPicture">
            <label class="custom-file-label" for="myPicture">Choose a picture</label>
            <?php if (isset($_GET["action"]) && $_GET["action"] == "modify") { ?>
                <div>
                    <img width="50px" src="<?= $picture; ?>" alt="<?= $title; ?>">
                </div>
            <?php } ?>
        </div>
        <div class="form-group col-md-12">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="<?= $description; ?>">
        </div>
        <?php if (isset($_GET["action"]) && $_GET["action"] == "modify") { ?>
            <button type="submit" class="btn btn-secondary" name="modifyProduct">Modify Product</button>
        <?php } else { ?>
            <button type="submit" class="btn btn-secondary" name="addProduct">Add Product</button>
        <?php } ?>
    </div>
</form>

<?php require_once("inc/footer.php"); ?>
