
<?php
  session_start();
  isset($_SESSION["cart"]) or $_SESSION["cart"] = [];
  
isset($_SESSION["user"]);
  if(isset($_SESSION["cart"]["message"])){
    echo "<p> ". $_SESSION["cart"]["message"] . "</p>";
    unset($_SESSION["cart"]["message"]);
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
<style>
    .h1{
        font-size:50px ;
        float: center;
        color: white;
    }
    
.card {
  float: left;
    width: 50%;
    display: block;
    margin-bottom: 20px;
    padding: 0 10px;
  background-color: whitesmoke;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 500px;
  margin: 20px;
  text-align: center;
  font-family: arial;
  border-radius: 2.5em;
  
}

.price {
  color: grey;
  font-size: 22px;
}

.card input {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
   border-radius: 2.5em;
}

.card input:hover {
  opacity: 0.7;
}

* {
  box-sizing: border-box;
}

body{
font-family: Arial, Helvetica, sans-serif;

    background-image: url(images/cloth4.jpg);
}
.details{
    float: center;
}
@media screen and (max-width: 600px) {
 
}
</style>
<body>
 
<h1 class="h1">Clothes</h1>

<div class="card-container">


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
    <form action="<?php echo $atcLink ?>">
      <input type="number" name="quantity" value="<?php echo $quantity ?>">

      <input type="hidden" name="productID" value="<?php echo $productID ?>">
      <input type="hidden" name="productName" value="<?php echo $productName ?>">
      <input type="hidden" name="price" value="<?php echo $productPrice ?>">
      <input type="hidden"name="filepath"value="<?php echo $ProImage;?>">
      <input type="submit" value="Add To cart">
    </form>
    
</p>
    
    
    
    </div>
<?php

}
?>
    
   
  </div>
  
  <?php

require("connect.php");
$status="";
if (isset($_POST['ProductID']) && $_POST['ProductID']!=""){
$code = $_POST['ProductID'];
$result = mysqli_query($conn,$sql);
$sql = (

"SELECT * FROM `products` WHERE `ProID`='$code'"
);
$row = mysqli_fetch_assoc($result);
$name = $row['Pname'];
$code = $row['ProID'];
$price = $row['price'];
$image =$row['filepath'] ;                         

$cartArray = array(
	$code=>array(
	'Pname'=>$name,
	'ProID'=>$code,
	'price'=>$price,
	'quantity'=>1,
	
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($code,$array_keys)) {
	$status = "<div class='box' style='color:red;'>
	Product is already added to your cart!</div>";	
    } else {
    $_SESSION["shopping_cart"] = array_merge(
    $_SESSION["shopping_cart"],
    $cartArray
    );
    $status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}


if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php"><img src="cart-icon.png" /> Cart<span>
<?php echo $cart_count; ?></span></a>
</div>
<?php
}

?>

<div style="clear:both;"></div>
<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

</body>
</html>
