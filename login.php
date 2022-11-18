<?php
session_start();
(isset($_SESSION["user"])) or $_SESSION["user"]=[];

if(isset($_SESSION["user"]["message"])){
    echo "<p> ". $_SESSION["user"]["message"] . "</p>";
    unset($_SESSION["user"]["message"]);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>  
<link rel="stylesheet" href="css.sheet.css"/>  
</head>
<style>

.card {
  float: left;
    width: 100%;
    display: block;
    margin-bottom: 20px;
    padding: 0 10px;
  background-color:#610e88;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 500px;
  margin: 20px;
  text-align: center;
  font-family: arial;
  border-radius: 2.5em;
  font-size: xx-large;
}

.card input ,button{
  border: none;
  outline: 0;
  padding: 12px;
  color: black;
  background-color: burlywood;
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
@media screen and (max-width: 1000px) {
 
}


</style> 

<body>
    <form action="login-test.php"method="post">
    <div class="card">
    <i style="float: centre;" class='fa fa-user-circle'>
        <br>
   Username <input type="text"name="username">
   <br>
   <br>
   <br>
   <br>
  Password <input type="password"name="UserPassword">
  <br>
  <br>
  <br>
  <br>
  email <input type="text"name="email">
  <br>
  <br>
  <br>
  <br>
  
<input type="submit" value="login"name="" ></a></input>
<br>
<a href="Un-dress.php">back to home page </a>
</div>
<div class="card">


    </div>
    </form>
</body>
</html>