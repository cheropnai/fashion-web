<?php
  require("connect.php");

  if(isset($_POST['categoryID'])){
   $katID1=$_POST['categoryID'];
}else{
   $katID1 = "ID not set in POST Method";
}
if(isset($_POST['productName'])){
   $Proname= $_POST['productName'];
}else{
   $Proname = "<br>Name not set in POST Method";
} if(isset($_POST['subcategoryID'])){
      $Subname2=$_POST['subcategoryID'];
   }
   else{
      $Subname2="Name not set in post method";
   }







  //$katID1=$_POST['categoryID'];
 
  //$Subname2= $_POST['subcategd'];
  if(isset($_FILES['prod_image'])){
    $errors= array();
    $file_name = $_FILES['prod_image']['name'];
    $targetDir = "upload_images/";
    $targetFile = $targetDir.basename($_FILES['prod_image']['name']);
    $file_size = $_FILES['prod_image']['size'];
    $file_tmp = $_FILES['prod_image']['tmp_name'];
    $file_type = $_FILES['prod_image']['type'];
    $exploded = explode('.', $_FILES['prod_image']['name']);

    //$exploded = explode('.', $_FILES['prod_image']['name']);
 $file_ext = strtolower(end($exploded));
   
    //$file_ext=strtolower((explode('.',$_FILES['prod_image']['name'])));
    
    $extensions= array("jpeg","jpg","png");
    
    if(in_array($file_ext,$extensions)=== false){
       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    
    if($file_size > 2097152) {
       $errors[]='File size must be exactly 2 MB';
    }
    
    if(empty($errors)==true) {
       move_uploaded_file($file_tmp,"images/".$file_name);
       echo "Success";
    }else{
       print_r($errors);
       echo"failed";
    }

   
 
  //if (is_uploaded_file($_FILES['prod_image']['tmp_name'])){
  // echo "upload succesful";
}
print_r([$_POST]);
  
  

  
  
  //var_dump($_FILES);


?>