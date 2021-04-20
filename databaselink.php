<?php
$server="localhost";
$database="artistry";
$username="root";
$password="vishakha";

$conn=mysqli_connect($server,$username,$password,$database);

if($conn){
    //echo("database connected successfully");
}
else{
    die(mysqli_connect_error());
}
?>