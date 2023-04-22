<?php

include 'dbconnect.php';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Travel Form </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<nav>
        <ul>
            <li class="brand"><img src="img/logo.png" alt="HETC"></li>
            <li class="items">Home</li>
            <li>About</li>
            <li>contact</li>
            <li ><input type="text" placeholder="Search.." id="searchbar"></li>
        </ul>
    </nav>
    <img  class="bg" src="img/banner-slide1-min.jpg" alt="HETC">
    <div class="container">  
        <h1> Welcome to HETC Darjeeling Trip Travel Form </h1>
        <P> Enter your details  and submit this form to confirm your participation in the trip</P>
        <p class="submitMsg">Thanks for submitting your form. we are happy to see you joining us for the Darjeeling trip</p>
        <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter Your Name">
        <input type="text" name="age" id="age" placeholder="Enter Your Age">
        <input type="text" name="gender" id="gender" placeholder="Enter Your Gender">
        <input type="email" name="email" id="email" placeholder="Enter Your Email id">
        <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone Number">
        <textarea name="other" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
        <button class="btn">Submit</button>
        
        </form>

    </div> 

    <?php
// insert query
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $other = $_POST['other'];


        $sql = "INSERT INTO `student_details` (`Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`, `Date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp())";

        $result = mysqli_query($con,$sql);
        

    }


?>

    
</body>

</html>
