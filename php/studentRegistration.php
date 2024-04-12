<?php

    session_start();
    include 'connection.php';
$FName = $_POST['fName'];
$LName = $_POST['lName'];
$emailAdd = $_POST['email'];
$sPassword = md5($_POST['Password']);


// Check if the email already exists
$emailCheckQuery = "SELECT * FROM studentaccount WHERE emailAdd = '$emailAdd'";
$emailCheckResult = $conn->query($emailCheckQuery);

if ($emailCheckResult->num_rows > 0) {
    // Email already exists, handle the error
    $_SESSION['error'] = "<p style='width: 80%; background-color: #f5d167; border-radius: 10px; padding: 5px; text-align: center; margin-bottom: 0;'>Email address already exists.<p>";
    header("Location: ../join.php");
    exit();
} else {
    // Email doesn't exist, proceed with the insertion
    $insert = "INSERT INTO studentaccount(FName, LName, emailAdd, sPassword) values('$FName','$LName','$emailAdd','$sPassword')";
    $conn->query($insert);
    $_SESSION['email'] = $emailAdd;
    $_SESSION['status'] = "Hello dear $FName, welcome to Taskmaster Assignment Helper and CV Maker website. You can access any service with your email 😊";
    header("Location: ../index.php");
}
?>
?>
