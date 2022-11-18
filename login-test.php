<?php
session_start();

$name=$_POST["username"];
$pass=$_POST["UserPassword"];
$mail=$_POST["email"];

require("connect.php");
//$sql="SELECT UserID,userName,userPass,email from users WHERE userName='$name' And userPass='$pass'";
$sql="SELECT UserID,userName,userPass,email from users WHERE email='$mail'";

//$sql2="SELECT UserID,userName,userPass,email from users WHERE userName=? And userPass=?";

//$stmt = $connection->prepare($sql);
//$stmt->bind_param("ss", $name, $pass);
//$stmt->execute();

$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
    $UserID = $row["userID"];
    $UserName = $row["userName"];
    $UserPassword = $row["userPass"];
    $email=$row["email"];
}

if($pass !== $UserPassword){
isset($_SESSION["user"]) or $_SESSION["user"]=[];
$_SESSION["user"]["message"]="wrong password,try again";
echo "<p>".$_SESSION["user"]["message"]."</p>";


//echo"try again";

header("Location: login.php");
}

if(mysqli_num_rows($result) < 1){
    echo "Please register first yourself ";
    header("Location: register.php");
}




$RegistrationInfo = [$UserName,$UserPassword,$email];



$Entereduserinfo = [$name,$pass,$mail];


if($Entereduserinfo == $RegistrationInfo){
    
    isset($_SESSION["user"]) or $_SESSION["user"]=[];
    //you could also do this
    //if(!isset($_SESSION["user"]))
    //$_SESSION["user"]=[];
//     $login=$_SESSION["user"];
    
// $login[$verification]=$RegistrationInfo;

$_SESSION["user"]=["id"=> $UserID,"name"=>$UserName,"email"=>$email];

$_SESSION["user"]["message"]="successful login";

//header("Location: Un-dress.php");

}




?>