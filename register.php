<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!--<link rel="stylesheet" href="css/css.sheet.css"/>-->
</head>
<style>

    body{

        background-image: url(images/haze.jpg);
    }
    fieldset{

/*column-count: 2;
column-gap: 50px;
*/
 color: white;
 font-size: 50px;
 background-color: #96305e;
}
input{

 font-size: 50px;
}
</style>
<body>
    <fieldset>
  <legend>personal details</legend>
  <form action="process-register.php" method="post">
      <ul>
        <br>
    
Username<input type="text"name="username"value="">
    <br>
    <br>
email<input type="email"name="email" id=""value=""> 
 <br>  
 <br>
password<input type="password" name="password" id="">




<!--<p>Please enter details of your location for delivery purposes</p>


<ul>
 county<input type="text"name ="county">
 <br>
 <br>
address1<input type="text"name="adressline1"> 
<br>
<br>
address2<input type="text"name="addressline2">
<br>
<br>
street<input type="text"name="street">


</ul>-->
<br>
<br>
<br>
<input  type="submit"name= "submit1"  value="submit">
      </ul>
</form>


</fieldset>
<br>
<br>
<br>
<br>

    
</body>
</html>