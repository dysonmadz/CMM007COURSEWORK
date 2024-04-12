<?php

include('connection.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

    if ($password !== $confirmpassword){
        echo "Password and confirm password are not the same!";
    } else {
        $sql = "INSERT INTO users (fname, lname, email, password) VALUES ('$fname', '$lname', '$email', '$password')";
        $result = mysqli_query($db, $sql);

        if ($result) {
            // echo "Registered Successfully";
            header ("Location: ../public/login.html");
        } else {
            // echo "Something Went Wrong!":
            header("Location: ../public/register.html");
        }
    }

   



