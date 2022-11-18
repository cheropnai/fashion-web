<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminTest</title>
    <link rel="stylesheet" href="css/css.sheet.css">
</head>
<style>
      body{

background-image: url(images/haze.jpg);
font-size: xx-large;
text-align: center;
font-family: Arial, Helvetica, sans-serif;
box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: blue;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
float:centre;
  /*position: fixed;*/
  bottom: 23px;
  right: 28px;
  width: 280px;
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
<body>
    
    <h1>ADMINISTRATION PAGE </h1>
    <div> <p>
      <button>Add products to the database </button>
      <br>
      <br>
      Choose what you wish to add to the database </p>
      <br>
      <br>
      <div>
        <button><a href="category.php">Category</a></button>
      <!--<button class="open-button" onclick="openForm()">Category</button>
      <div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>add Category</h1>

    <label><b> Category name</b></label>
    <input type="text" name="productName" required>
    <br>
    <br>
        <p>Do you want to add a subcategory to the category you created?</p>
        <br>
         <a href="#myForm2">yes </a>
         <br>
         <br>
         <br>
         <a href="login.php">no</a>

       <br>
        
    


    <input type="submit" value="submit"class="btn"name="submit2">
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
-->
      </div>
      <br>
      <br>
      <br>
      <button> <a href="subcategory.php">Subcategory</a></button>
      <br>
      <br>
      <br>
      <div>
      <button class="open-button" onclick="openForm()">product</button>

<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>add product</h1>

    <label><b> product name</b></label>
    <input type="text" name="productName" required>
     
    <label><b> Price </b> </label>
    <input type="text"name="price">
  
    <label><b>subcategoryID</b></label>
    <input type="text" name="subcategd" required>

    <label><b>categoryID</b></label>
    <input type="text" name="categoryid" required>

    <label> <b>Category Name </b></label>
    <?php
require("connect.php");
$sql="SELECT  from categories ";

$result = mysqli_query($conn,$sql);

//print_r($result);

if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result)){

?>
<select>
<option></option>  <?php echo $row["CatID"];?>
    

 </select>   
 <?php  
}}
?>
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

      </div>
</div>

</body>
</html>