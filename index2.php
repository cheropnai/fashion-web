<?php

echo " hello world  ";
echo "<br >";
$first_name="Jane";

echo $first_name;
echo "<br>";
$number = 10;// global scope variable
echo $number;
function num(){
global $number;
echo $number;

}
function count(){
    

}

num();
?>