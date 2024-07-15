<?php
    include "connection.php";
    session_start();

    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $sql = "INSERT INTO contact_us (CName, CEmail, CSubject, CMessage) VALUES('$name', '$email', '$subject', '$message')";
    $conn -> query($sql);

    $_SESSION["msg"] = "Thank you for reaching out!";

    header("Location: ../pages/contactUs.php");
?>