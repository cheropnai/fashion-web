<?php
require("connect.php");

//print_r ([$_POST]);
//$sql=mysqli_query($conn,$sql);
print_r([$_FILES]);


if (isset($_POST['submit1'])){
    
$firstname=$_POST['username'];
echo $firstname;
//$secondname=$_POST['secondname'];
//echo $secondname;
//$lastname=$_POST['lastname'];
//echo $lastname;
$emailaddress=$_POST['email'];
echo $emailaddress;
//$contact=$_POST['phonenumber'];
//echo $contact;
$password=$_POST['password'];
echo $password;
/*$county=$_POST['county'];
echo $county;
$address1=$_POST['address1'];
echo $address1;
$address2=$_POST['address2'];
echo $address2;
$street=$_POST['street'];
echo $street;*/

$sql="INSERT INTO Users(userName, userPass,email)
values( '$firstname','$password','$emailaddress')";



}
elseif(isset($_POST['submit2'])){

//$CatName=$_POST['CategoryName'];
$CatName=$_POST['CategoryName'];




$sql ="INSERT INTO categories( CatName)
values('$CatName')";

}
elseif(isset($_POST['submit3'])){
$katID=$_POST['Categoryiid'];
$Subname= $_POST['SubCategoryName'];
$SubcatID= $_POST['SubCategoryID'];

$sql ="INSERT INTO subcat( Subname,CategoryID)values ( '$Subname','$katID'
)";

}

elseif(isset($_POST['submit4'])){
   if(isset($_POST['categoryID'])){
      $katID1=$_POST['categoryID'];
   }else{
      $katID1 = "ID not set in POST Method";
   }
   if(isset($_POST['productName'])){
      $Proname= $_POST['productName'];
   }else{
      $Proname = "<br>Name not set in POST Method";
   }
   if(isset($_POST['subcategoryID'])){
      $Subname2=$_POST['subcategoryID'];
   }
   else{
      $Subname2="Name not set in post method";
   }
   if(isset($_POST['price'])){
      $price1=$_POST['price'];
   }
   else{
      $price1="Name not set in post method";
   }
   
   


    //$katID1=$_POST['CategoryID'];
    //$Proname= $_POST['productName'];
    //$Subname2= $_POST['SubID'];
    if(isset($_FILES['prod_image'])){
      $errors= array();
      $file_name = $_FILES['prod_image']['name'];
      //mkdir("upload_images");
      $targetDir = "uploads/";
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
         $new_file_name= uniqid("prd_image_").".$file_ext";
         move_uploaded_file($file_tmp,"uploads/$new_file_name");
         echo "Success";
      }else{
         print_r($errors);
         echo"failed";
      }
  
        
     }
     
    

    
    $sql ="INSERT INTO products( Pname,subcategoryID,CategoryID,filepath,price)values ( '$Proname','$Subname2','$katID1','$new_file_name','$price1'
    )";
    
    }
    

if(mysqli_query($conn,$sql)){
    echo"New record inserted successfully";
    
}else {
        echo"erro:record not added ".mysqli_error($conn);
}


?>
