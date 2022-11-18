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
            background-image: url(images/haze.jpg);

        }
        
    </style>
</head>
<body>
    <form action="edit.php"method="post">
    <div>
<table class="uvt">
<tr>
<th>UserID</th>
<th>userName</th>
<th>useremail</th>
<th>edits</th>
</tr>
<?php
require("connect.php");
$sql="SELECT userID,userName,email from Users ";

$result = mysqli_query($conn,$sql);

//print_r($result);

if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result)){

?>
<tr>
<td><?php echo $row["userID"];?></td>
<td><?php echo $row["userName"];?></td>
<td><?php echo $row["email"];?></td>

<td><button class="but">edit <a href="edit.php"></button></td>
<input type="hidden"name="ID" value="<?php echo $row["userID"];?>">
<input type="hidden"name="name"value="<?php echo $row["userName"];?> ">
<input type="hidden"name="email" value="<?php echo $row["email"];?>">
</tr>
<?php
}}
?>
</table>




    </div>
    </form>
</body>
</html>