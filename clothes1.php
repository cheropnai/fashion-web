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
$query="SELECT ProID,Pname,price,filepath from products where CategoryID=1";
$result = $conn->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);}
    while($row=mysqli_fetch_assoc($result)){
?>
<div class="list2">
<?php 
  foreach ($options as $option) {
  ?>
  
   <?php echo '<img src="uploads/'.$option['filepath'].'">';
   ?>



<?php
}}?>

    </div>
</body>
</html>