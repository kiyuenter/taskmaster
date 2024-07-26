<?php
    session_start();
    include "connection.php";

    $email = $_POST['email'];

    $sql = "DELETE FROM admin_account WHERE email = '$email'";
    $result = $conn -> query($sql);

    $_SESSION["msgs"] = "The account is deleted!";

    header("Location: ../admin-panel/pages/admin_account.php");
?>