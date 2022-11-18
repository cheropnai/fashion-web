<?php
session_start();
//isset($_SESSION["user"]) or $_SESSION["user"] = [];
isset($_SESSION["cart"]) or $_SESSION["cart"] = [];
// unset($_SESSION["user"]);
// unset($_SESSION["cart"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>            
            
    <link rel="stylesheet" href="css/css.sheet.css"/>
   
        
   

</head>
<!-----<style>
    body{
        background-image:url(images/dresshop.jpg) ;
        bakv
    }
</style>
-->

<style>
.list{
    
    list-style-type: none;
    margin: 0;
    padding: 15px;
    overflow: hidden;
    background-color:black ;
    font-size: 30px;
    position: fixed;
    width: 100%;
  }
  .list a {
    float: right;
    border-right:1px solid rgb(250, 251, 252);
    display: block;
    color: rgb(245, 241, 241);
    background-color: #610e88;
    text-align: center;
    padding: 18px 16px;
    text-decoration: none;
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
.card .p1{
color: grey;
border-radius: 2.5em;
background-color: white;
font-family: Arial, Helvetica, sans-serif;
font-weight: bold;
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

      
    

    .navbar2 a{
    float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
   

}
.navbar2{
    overflow: hidden;
  background-color:#610e88;
position: sticky;
}
.row{
 background-image: url(haze.jpg);

}
.column {
  float: left;
  width: 30%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 500px) {
  .column {
    width: 100%;
  }
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: whitesmoke;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  /*padding: 8px 8px 8px 32px;*/
  text-decoration: none;
  font-size: 25px;
  font-weight: bold;
  color: black;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: grey;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}
.content{
    border-radius:70px;
    float: center;
    width:40%;
    background-color: black;
    color: white;
    font-size: 50px;
    border: #f1f1f1;
}
.content a{
    color:antiquewhite;
    float: center;
}
</style>
<body> <p id ="top"></p>
    
    
    
    <div class="list">
        <h1 id="heading"> <strong>Classy_dress</strong></h1>
       
        
        <input class="input" type="text" placeholder="Search.." name="search">
        <button style ="float: left;"type="submit"><i class="fa fa-search"></i></button> 
        <a href="cartview.php"><i class="fa">&#xf07a;<?php 
        if(isset($_SESSION["cart"]))
        echo count($_SESSION["cart"])?></i>Cart</a>
        
        <a href="Accounts.php"><i class='fa fa-user-circle'></i>Sign In</a>
        <a href="orders/Orders.php"><i class="fa fa-question-circle" aria-hidden="true"></i>help</a> 
        <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a> 
         </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="navbar2">

  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="dbfecth.php">clothes</a>
    <a href="#">bags</a>
    <a href="#">Shoes</a>
    <a href="#">Accesories</a>
    <a href="#">Innerwear</a>
    <a href="#">sweaters</a>
    <a href="#">blazers</a>
    
  </div>
  
  <div id="main">
    
    
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; menu</span>
  </div>
  
  <script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
  }
  </script>
     
  

  
    <a href="">offers</a>
    <a href="">hotsales</a>
    <a href="">contact us</a>
    <?php

if(isset($_SESSION["user"]["message"])){
  echo "<p> ". $_SESSION["user"]["message"] . "</p>";
  //unset($_SESSION["user"]["message"]);
}
    ?>
</div>
        
         <!--<div class="List2">
           
            <div tabindex="0" class="menu">
                <div class="menu-dropdown">
                    <a href="">clothes</a>
                    <a href="">shoes</a>
                    <a href="">Bags </a>
                    <a href="">accesories</a>
                    <a href="">Innerwear</a>
                </div>
            </div>
            <a href="about.html"><i class="fa fa-book">about</i></a>
           
            <a href="contact us.html"><i class=" fa fa-envelope">contacts</i></a>
            <a href="Hotsales"><i class="fa fa-fire">Hotsales</i></a>
            <a href="Offers "><i class="fa fa-bitbucket">Offers</i></a>
        
        </div> -->
<div class="dat">
        
    
    <div class="content">
<a href="">Order Now</a>


    </div>


<br>
<br>
  <div class="card">
    <h1 class="h3">shoes</h1>
    <img src="images/shoes.jpg" alt="shoes image"height="300">
    <br>
    <p class="p1">
        Buy the latest , trending shoes on the market at affordable prices.Be assured of quality . We sell all hot brands , Nikki,addiddas ,Anne Klein ,Calvin Klein and many more .

    </p>
    
        <br>
        <a href="">details</a>
        
        <br>
        </div>
        <div class="card">
        <h3 class="h3">bags and accesories</h3>
        <img src="images/bags.jpg" alt="bags image "height="300">
        <br>
        <p class="p1">LGet some of the most flashy bags from. High Quality , long-lasting. Some of our featured brands are gucci ,Loius Vuitton , lowe.Lowe,chanel ,Givenci Marc Jacobs and many more</p>
        <br>
        <a href="">details</a>
        </div>
        <div class="card">
        <h3 class="h3">dresses</h3>
        <br>
        <img src="images/dresmodel.jpg" alt="Model in a dress"height="300"
        ><br>
        <p class="p1">Do you wanna look sassy? Do you wanna rock official? go to a party of just enjoy a warm summer? try our dresses , we have all you are looking for </p>
        <br>
        <a href="">details</a>
         <br>
         </div>
         <img src="images/sweaters.jpg" alt="image of sweaters"height="300">
         <p class="p1">keep warm and trendy.Try us for classy sweaters, In every fabric of your choice.Just click that order button. </p>
         <a href="">details </a>
         </ol>
        <br>
        <i style='font-size:24px' class='fas'>&#xf07a;</i>
        </div>
        <fieldset>
        <h1>More Info</h1>
        <p>
     
<ul>
<li> <a href="contactUs"></a> contacts us on 0726542429/98363424

</li>
<li> <a href="email"></a>
    email us on 
</li>
<li>
    our location 
</li>
<li> <a href=""></a>  subscribe for notifications on what's trending</li>
<li> <a href=""></a> cookie policy </li>
<li> <a href=""></a>  refund policy</li>




            </ul>
        
        </p>
        <a href="#top">Back to top of the page </a>
        <input type="button" value="">
        
    </fieldset>

        </html>
</body>