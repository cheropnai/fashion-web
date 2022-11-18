<?php
    # start session
    session_start();

    # check if there is a cart index in the session array, if not
    # set it (create it)
    if (isset($_SESSION["user"])){
        
    if(!isset($_SESSION["cart"])){
        $_SESSION["cart"] = [];
    }
    
    $cart = $_SESSION["cart"];

    $productID = $_GET["productID"] ?? header("Location: dbfecth.php");
    $productName = $_GET["productName"];
    $productPrice = $_GET["price"];
    $productQty = $_GET["quantity"];
    $image=$_GET["filepath"];

    

    $details = ["id" => $productID, "name" => $productName, "price" => $productPrice, "quantity" => $productQty,"Productimage" => $image];

    $cart[$productID] = $details;

    $_SESSION["cart"] = $cart;
    $_SESSION["cart"]["message"] = "Successfully updated cart";

    //print_r($_SESSION["cart"]);
    header("Location: dbfecth.php");
}

else
$_SESSION["user"]["message"]="log in first to add producst to te cart";

header("Location: dbfecth.php");
?>