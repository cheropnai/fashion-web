<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/css.sheet.css">
   <style>body{

background-image: url(images/haze.jpg);
font-size: xx-large;
}
a{
color: black;
border-width: 2em;
font-size: 100px;
}
a:hover{
background-color: blue;

}


</style> 


</head>
<body>
    <h1>fill in the following details</h1>

    <form action="process-register.php" method="post">

    <div>
    name of new category<input type="text"name="CategoryName">
    <select name="
    " id="">
<option value="">skirts</option>
<option value="">dresses</option>
<option value="">trousers</option>


</select>
    




    <div>
        <p>Do you want to add a subcategory to the category you created?</p>
        <br>
         <a href="subcategory.php">yes</a>
         <br>
         <br>
         <br>
         <a href="login.php">no</a>

       <br>
        
 


    </form>

    <!--<button><a href="subcategory.php">Yes</button
    <button> <a href="login.php"></a>No</button>-->

    </div>
<input type="submit" name="submit2" value="submit">
 


    </form>
    </div>
</body>
</html>