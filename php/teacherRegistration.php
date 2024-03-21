<?php
    session_start();
    include 'connection.php';

    $FName = $_POST['fName'];
    $LName = $_POST['lName'];
    $email = $_POST['email'];
    $uPassword = md5($_POST['Password']);
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $country = $_POST['country'];
    $edulevel = $_POST['edl'];

    $insert = "INSERT INTO teacheraccount(FName, LName, emailAdd, tPassword, Gender, dob, country, eduLevel) VALUES('$FName','$LName','$email','$uPassword','$gender','$dob','$country','$edulevel')";
    $conn -> query($insert);

    $_SESSION['status'] = "Hello dear $FName, welcome to Taskmaster Assignment Helper and CV Maker website. Please fill out the next form carefully to become a teacher partner."; 
    header("Location: ../attachment.php");
?>