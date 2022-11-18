
<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require("connect.php");
    if(isset($_POST['submit']))
    {
        $UserID=$_SESSION['user']["id"];
        echo $UserID;
        $bill = $_POST["totalamount"] ?? header("Location: cartview.php");

        //$ProductID=$_POST['productid'];
        if(isset($_POST['totalamount'])){
        $bill = $_POST['totalamount'];
        }
        $sql = "INSERT INTO orders(Amount, Userid) values(?, ?)";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("di", $UserID, $bill);


        if(!$stmt->execute()){
            exit("an error ocurred");
        }

        $orderId = $connection->insert_id;

        $sql = "INSERT INTO product_order(productId, orderId, price, quantity) values (?, ?, ?, ?)";
        $stmt = $connection->prepare($sql);

        foreach ($_SESSION["cart"]  as $productId => $product){
            $quantity = $product["quantity"];
            $price = $product["price"];
            $stmt->bind_param("iidi", $productId, $orderId, $price, $quantity);

            $stmt->execute();
        }



        //print_r($_POST);
        
    }
        echo"order successfully made";
    ?>
</body>
</html>