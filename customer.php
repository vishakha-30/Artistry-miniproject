<?php

if(isset($_POST['submit'])){
    include './databaselink.php';
    $fname=$_POST['first'];
    $lname=$_POST['last'];
    $address=$_POST['add'];
    $email=$_POST['email'];
    $pincode=$_POST['area'];
    $phone=$_POST['phone'];
    $city=$_POST['city'];
    $sql = "INSERT INTO `customer` (`first_name`, `last_name`, `phone_number`, `email_id`, `address`, `pincode`, `city`) VALUES ('$fname', '$lname', '$phone', '$email', '$address','$pincode', '$city')";

if (mysqli_query($conn,$sql)) {
  //echo "New record created successfully";
  echo "<script>alert('Customer Registered successfully');</script>";
} else {
  //echo "Error: " . $sql . "<br>" . $conn->error;
  //echo "New record created successfully";
  echo "<script>alert('Customer Registered successfully');</script>"; 
  
}

$conn->close();
}

?> 



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/customer.css">
    <title>Customer Login</title>
</head>

<body>
    <div class="regform">
        <h1>
            Customer Registration</h1>
    </div>
    <div class="main">

        <form method="POST" action="customer.php">
            <div id="name">
                <h2 class="name">
                    Name </h2>
                <input class="firstname" type="text" name="first" required=""><br>
                <label class="firstlabel">first name</label>
                <input class="lastname" type="text" name="last" required=""><br>
                <label class="lastlabel">last name</label>
            </div>
            <h2 class="name">
                Address </h2>
            <input class="company" type="text" name="add" required="">
            <h2 class="name">
                Email</h2>
            <input class="email" type="email" name="email" required="">
            <h2 class="name">
                Phone</h2>
            <input class="Code" type="text" name="area" required="  ">
            <label class="area-code">Area Code</label>
            <input class="number" type="text" name="phone" required="">
            <label class="phone-number">Phone Number</label>


            <h2 class="name">
                City</h2>
            <!-- <select class="option" name="subject">
                <option disabled="disabled" selected="selected">--Choose option--</option>
                <option>Ahmedabad</option>
                <option>Mangalore</option>
                <option>Mumbai</option>
                <option>Bangalore</option>
                <option>Chennai</option>
                <option>Delhi</option>
                <option>Kochi</option>
                <option>Kannur</option>
                <option>Pune</option>
            </select> -->
            <input class="number" type="text" name="city">
            <!-- <h2 id="customer">
                Are you beginner?</h2>
            <label class="radio">
                <input class="radio-one" type="radio" checked="checked" name="rdiobtn">
                <span class="checkmark"></span>
                Yes
            </label>

            <label class="radio">
                <input class="radio-two" type="radio" name="rdiobtn">
                <span class="checkmark"></span>
                No
            </label> -->

            <button name="submit" type="submit">Register</button>


        </form>
        
 

    </div>
</body>

</html>


