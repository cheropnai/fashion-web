<?php
require("connect.php");


$sql="SELECT ProID,Pname,filepath,price from products ";

$result = mysqli_query($conn,$sql);

//print_r($result);

if(mysqli_num_rows($result)>0)
?>

<?php

while($row=mysqli_fetch_assoc($result)){
    $productID = $row["ProID"];
    $productName = $row["Pname"];
    $productPrice = $row["price"];
    $ProImage=$row["filepath"];
    $quantity = 0;

    if(isset($_SESSION["cart"][$productID])){
      $quantity = $_SESSION["cart"][$productID]["quantity"];
    }

    $atcLink = "add-to-cart.php";

    ?>

      <div class="card">

      <?php echo'<img src="uploads/'.$row['filepath'].'">'."<br>";
    ?>

        
        
    <h1><?php  echo "<br>" .$row["Pname"];
    ?></h1>
    <p class="price"><?php  echo "<br>"."Ksh".$row["price"];
    ?></p>

<?php
}
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
    
</body>
</html>