<?php
    session_start();
    include "connection.php";

    $user = $_POST["username"];
    $email = $_POST["email"];
    $password = md5($_POST['password']);

    $sql = "UPDATE admin_account SET username = '$user', APassword = '$password' WHERE email = '$email'";
    if($conn -> query($sql) === TRUE){
        $_SESSION["update"] = "The admin account is successfuly updated";

        header("Location: ../admin-panel/pages/admin_account.php");
    } else {
        $_SESSION["update"] = "This email is not found, please check again";
    }

?>