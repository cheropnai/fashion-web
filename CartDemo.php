<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.product_wrapper {
	float:left;
	padding: 10px;
	text-align: center;
	}
.product_wrapper:hover {
	box-shadow: 0 0 0 2px #e5e5e5;
	cursor:pointer;
	}
.product_wrapper .name {
	font-weight:bold;
	}
.product_wrapper .buy {
	text-transform: uppercase;
	background: #F68B1E;
	border: 1px solid #F68B1E;
	cursor: pointer;
	color: #fff;
	padding: 8px 40px;
	margin-top: 10px;
}
.product_wrapper .buy:hover {
	background: #f17e0a;
	border-color: #f17e0a;
}
.message_box .box{
	margin: 10px 0px;
	border: 1px solid #2b772e;
	text-align: center;
	font-weight: bold;
	color: #2b772e;
	}
.table td {
	border-bottom: #F0F0F0 1px solid;
	padding: 10px;
	}


    </style>
</head>
<body>
    
</body>
</html>

<?php
session_start();
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