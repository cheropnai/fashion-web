<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/css.sheet.css">
</head>
<style>body{

background-image: url(images/haze.jpg);
font-size: xx-large;
}
a{
color: black;
border-width: 2em;
font-size: 80px;
}
a:hover{
background-color: blue;

}

</style> 

<body>
    <h1>Fill in some details</h1>
    <form action="process-register.php"method="post">
    Name of Sub-Category <input type="text"name="SubCategoryName">
    <br>
    <!--ID of subcategory <input type="text"
    name="SubCategoryID">-->
    <br>
    ID of category <input type="text" name="Categoryiid" >

    <br>
    <input  type="submit" name="submit3" value="submit">


    <div>
<p>do you want to add products to the subcategory you've created </p>
<br>
<a href="product.php">yes</a>
<br>
<a href="login.php">no</a>

    </div>
    </form>
</body>
</html>