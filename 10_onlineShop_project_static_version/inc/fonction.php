<?php

function isUserConnected() {
    return (isset($_SESSION["user"])) ? true : false;
}


function isUserConnectedAndAdmin () {
    return (isUserConnected() && $_SESSION["user"]["status"]== 1) ? true : false;
}


function create_cart_session() {

    if(!isset($_SESSION["cart"])) {

        $_SESSION["cart"]["id_product"] = array();
        $_SESSION["cart"]["quantity"] = array();
        $_SESSION["cart"]["price"] = array();
        $_SESSION["cart"]["title"] = array();
        $_SESSION["cart"]["picture"] = array();
        $_SESSION["cart"]["stock"] = array();
    }
}


function add_product($product, $quantity) {

    create_cart_session();

    $_SESSION["cart"]["id_product"][] = $product["id"];
    $_SESSION["cart"]["quantity"][] = $quantity;
    $_SESSION["cart"]["price"][] = $product["price"];
    $_SESSION["cart"]["title"][] = $product["title"];
    $_SESSION["cart"]["picture"][] = $product["picture"];
    $_SESSION["cart"]["stock"][] = $product["stock"];

}

function totalProductInCart() {
    if(isset($_SESSION["cart"])) {
        return count($_SESSION["cart"]["id_product"]);
    } else {
        return 0;
    }
}


    function deleteProductFromCart($id_product) {
        if (isset($_SESSION["cart"])) {
            $positionProduct = array_search($id_product, $_SESSION["cart"]["id_product"]);
    
            if ($positionProduct !== false) {
                unset($_SESSION["cart"]["id_product"][$positionProduct]);
                unset($_SESSION["cart"]["title"][$positionProduct]);
                unset($_SESSION["cart"]["quantity"][$positionProduct]);
                unset($_SESSION["cart"]["price"][$positionProduct]);
                unset($_SESSION["cart"]["picture"][$positionProduct]);
    
                $_SESSION["cart"]["id_product"] = array_values($_SESSION["cart"]["id_product"]);
                $_SESSION["cart"]["title"] = array_values($_SESSION["cart"]["title"]);
                $_SESSION["cart"]["quantity"] = array_values($_SESSION["cart"]["quantity"]);
                $_SESSION["cart"]["price"] = array_values($_SESSION["cart"]["price"]);
                $_SESSION["cart"]["picture"] = array_values($_SESSION["cart"]["picture"]);
            }}
}

 function totalCartAmount() {

    $total = 0;

    for ($i=0; $i < count($_SESSION["cart"]["id_product"]); $i++) {
        $total += $_SESSION["cart"]["price"][$i] * $_SESSION["cart"]["quantity"][$i];
    }
return $total; 

}



?>