<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styleUV.css">
    <style>
        body{
            background-image: url(images/cloth4.jpg);

        }
        
    </style>
</head>
<body>
    <div>
<table class="uvt">
<tr>
<th>productID</th>
<th>productName</th>
<th>price</th>

</tr>
<?php
require("connect.php");
$sql="SELECT ProID,Pname,price from products ";

$result = mysqli_query($conn,$sql);

//print_r($result);

if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result)){

?>
<tr>
<td><?php echo $row["ProID"];?></td>
<td><?php echo $row["Pname"];?></td>
<td><?php echo $row["price"];?></td>

<td><button class="but">edit <a href="edit.php"></button></td>
</tr>
<?php
}}
?>
</table>




    </div>
    
</body>
</html>