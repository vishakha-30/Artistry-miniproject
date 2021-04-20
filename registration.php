<?php
session_start();
header('location:signinsignup.php');
$con=mysqli_connect('localhost','root','vishakha');
mysqli_select_db($con,'artistry');


$name=$_POST['user'];
$pass=$_POST['password'];


$s=" select * from login where id= '$name'";
$result=mysqli_query($con, $s);
$num=mysqli_num_rows($result);
if($num==1){
    echo"Username already taken";
}else{
    $reg="insert into login(id,password) values('$name','$pass')";
    mysqli_query($con,$reg);
    echo "<script>alert('hello')</script>";
}
?>

