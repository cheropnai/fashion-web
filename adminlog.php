<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
body{
    background-image:url(images/cloth4.jpg);
}

</style>
<body>
<div class="card">
<h2>ADMIN</h2>
<br>
   Username <input type="text"name="AdminName">
   <br>
   <br>
   <br>
   <br>
   <br>
  Password <input type="password"name="AdminPassword">
  <br>
  <button><a href="admintrier.php" >submit</button>

    </div>
</body>
</html>