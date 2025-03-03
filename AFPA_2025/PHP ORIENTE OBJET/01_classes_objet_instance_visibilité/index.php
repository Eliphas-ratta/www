<?php 

class Cart {

    public $nbrProduct;

    public function addProduct() {
        return "l'article a bien été ajouté !";
    }

    public function removeProduct() {
        return "l'article a bien été supprimé !";
    }

    // public/private/protected

    public function emptyCart() {
        return "Le panier a bien été supprimé !";
    }
}


$cart = new Cart;

echo $cart->addProduct();
echo $cart->removeProduct();
echo $cart->emptyCart();


?>