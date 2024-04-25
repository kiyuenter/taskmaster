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
$edulevel = $_POST['edu'];
$depa = $_POST['department'];
$academic = $_POST['academic'];

// Check if the email already exists
$emailCheckQuery = "SELECT * FROM teacheraccount WHERE emailAdd = '$email'";
$emailCheckResult = $conn->query($emailCheckQuery);

if ($emailCheckResult->num_rows > 0) {
    // Email already exists, handle the error
    $_SESSION['error'] = "<p style='width: 80%; background-color: #f5d167; border-radius: 10px; padding: 5px; text-align: center; margin-bottom: 0;'>Email address already exists.<p>";
    header("Location: ../teachersignup.php");
    exit();
} else {
    // Email doesn't exist, proceed with the insertion
    $insert = "INSERT INTO teacheraccount(FName, LName, emailAdd, tPassword, Gender, dob, country, eduLevel, department, academic) VALUES('$FName','$LName','$email','$uPassword','$gender','$dob','$country','$edulevel','$depa','$academic')";
    $conn->query($insert);
    $_SESSION['department'] = $depa;
    $_SESSION['academic'] = $academic;
    $_SESSION['email'] = $email;
    $_SESSION['status'] = "Hello dear $FName, welcome to Taskmaster Assignment Helper and CV Maker website. Please fill out the next form carefully to become a teacher partner.";
    header("Location: ../attachment.php");
}
?>
