<?php
    session_start();
    include "connection.php";

    $enable = $_POST["accept"];
    $email = $_POST["email"];


    if($enable == "Accept") {
        $enable = "Enable";
        $sql = "UPDATE teacheraccount SET statusActivity = '$enable' WHERE emailAdd = '$email'";
        if($conn -> query($sql) === TRUE){
            $_SESSION["update"] = "This teacher account $email is accepted";
    
            header("Location: ../admin-panel/pages/teacher_pages/new_registrations.php");
        } else {
            $_SESSION["update"] = "This email is not found, please check again";
        }
    } elseif($enable == "Reject") {
        $enable = "Disable";
        $sql = "UPDATE teacheraccount SET statusActivity = '$enable' WHERE emailAdd = '$email'";
        if($conn -> query($sql) === TRUE){
            $_SESSION["update"] = "This teacher account $email is rejected";

            header("Location: ../admin-panel/pages/teacher_pages/new_registrations.php");
        } else {
            $_SESSION["update"] = "This email is not found, please check again";
        }
    } elseif($enable == "Remove Partnership") {
        $enable = "Disable";
        $sql = "UPDATE teacheraccount SET statusActivity = '$enable' WHERE emailAdd = '$email'";
        if($conn -> query($sql) === TRUE){
            $_SESSION["update"] = "This teacher account $email is rejected";

            header("Location: ../admin-panel/pages/teacher_pages/existing_accounts.php");
        } else {
            $_SESSION["update"] = "This email is not found, please check again";
        }
    }
    
?>