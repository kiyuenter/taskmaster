<?php
    include "connection.php";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    echo $name."<br>";
    echo $email."<br>";
    echo $subject."<br>";
    echo $message."<br>";
?>