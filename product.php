<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/css.sheet.css">
    <style>
    body{

background-image: url(images/haze.jpg);
font-size: xx-large;
text-align: center;
color: black;
max-width: 900px;
  padding: 10px;
  

    }
    .it{
      float:center;
    }
    h2{

     color: black; 
    }
  input {
  width: 90%;
  padding: 15px;
  margin: 5px 0 22px 0;
  /*border: none;*/
  border-radius: 2em ;
  
  background: #f1f1f1;
font-size: xx-large;
  }
a{background-color: blue;
color: white;
border-width: 2em;
font-size: 100px;
}
a:hover{
background-color: blue;

}
.form{
  float: center;
    box-sizing: border-box;
  border-radius: 2em;
  background-color:beige;
  

  
}
label{
  font-size: xx-large;
    font-weight: bold;
    font-family: Arial, Helvetica, sans-serif;
}
select{
  font-size: xx-large;
}
option{
  font-size: xx-large;
}


</style> 

</head>
<body>
 <div class="it">
    <h2>fill in the product details</h2>

    <form class="form"action="process-register.php" method="post"enctype="multipart/form-data">
    <label>product name </label>
    <input type="text"name="productName">
    <br>
    <br>
     <label>Price</label>
      <input type="text"name="price">
    <br>
    <br>
    <label>category Name</label>
    <?php 
    require("connect.php");
    $query ="SELECT * FROM `categories`";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>
 <select name="categoryID">
  <option>Select Categories</option>
  <?php 
  foreach ($options as $option) {
  ?>
    <option value="<?php echo $option['CatID'];?>"><b><?php echo $option['CatName'];?> </b></option>
    <?php 
    }
   ?>
 </select>
    
    <br>
    <label>product code </label>
    <input type="text"name="code">
    <br>
    <br>
    <label>subcategory ID </label>
    <input type="text"name="subcategoryID">
    <br>
    <br>
    <label>Upload the product's image</label>
    <input type="file" name="prod_image" id="" >
    <br>
    <br>
    <div>
    <input class="button" type="submit" name="submit4" value="submit">

    </div>
    </form>
    </div> 
    </body>
     
    </html>
    <html>


  <!--
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  float: center;

  /*bottom: 23px;
  right: 28px;
  width: 280px;
  */
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>



<button class="open-button" onclick="openForm()">ADD PRODUCT</button>

<div class="form-popup" id="myForm">
  <form action="process-register" class="form-container">
    <h1>Login</h1>

    <label><b> product name</b></label>
    <input type="text" name="productName" required>

    <label><b>subcategoryID</b></label>
    <input type="text" name="subcategd" required>

    <label><b>categoryID</b></label>
    <input type="text" name="categoryid" required>


    <input type="submit" value="submit"class="btn"name="submit4">
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>
