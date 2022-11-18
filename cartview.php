<?php
session_start();

//print_r($_SESSION);
//unset($_SESSION[0]);
//isset($_SESSION["user"]);

if(!isset($_SESSION["cart"])){
    $_SESSION["cart"] = [];
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

.product_wrapper{
float: left;
border-radius: 2.5em;
background-color: blue;
  float: left;
    width: 10%;
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




.charges{
float: left;
width: 100%;
display: block;
background-color:whitesmoke ;
border-radius: 2.5em;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
text-align: center;
font-family: arial;
}




.price {
  color: grey;
  font-size: 22px;
}
.amount{
color:black;
font-size: 30px;


}
body{
font-family: Arial, Helvetica, sans-serif;

    background-image: url(images/cloth4.jpg);
}


p{
font-size: xx-large;

}
.button{
    width: 700px;
}
.charges input {
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

.charges input:hover {
  opacity: 0.7;
}


</style>
<body>
<h1>cart</h1>

    
    
    
<form action="make_order.php"method="post">
    

<?php
$totalprice=0;


foreach ($_SESSION["cart"]  as $productId => $product){
?>


 <div class="product_wrapper">  
    <div class="card">
        <?php
         echo '<img src="uploads/'.$product["Productimage"].'"height="100">'."<br>";

        ?>
   
    </div>
    
    <p><?php echo $product["name"] ?></p>
   <p class="price"> <?php echo $product["price"] ?></p>
   <p class="amount"><?php echo $product["quantity"] ?></p>
   <input type="hidden" value="<?php echo $product["id"] ?>"name="productid">
  <input type="hidden"value="<?php
  echo $_SESSION["user"]["id"];
   ?>"name="UserId">
    <?php
    $totalprice = $totalprice + $product["price"] * $product["quantity"]

    ?>

   </div>

   <?php
 
}



?> 
 

<br>
<br>
<br>
    
<div class="charges">
    <p> Total amount =<span>
      <?php echo $totalprice; ?></span>
      </p>
    <p>Number of items = <span><?php  echo count($_SESSION["cart"])?></span></p>
     


    <div>
    <input type="hidden"value="<?php $totalprice ;?>"name="totalamount">   
    <input type="submit" value="submit"name="submit" class="buy">
    <?php
  
    ?>
    </div>  
<!--<input type="hidden" value="<?php //unset($_SESSION["cart"]); ?>">
-->
</form>
</div>


      
      










</body>
</html>