<?php
    include 'connection.php';

    session_start();
    $coverName = $_POST['cover'];

    $sql = "DELETE FROM cv_template WHERE cover_image = '$coverName'";
    $result = $conn -> query($sql);

    $sql = "DELETE FROM resources WHERE coverimg = '$coverName'";
    $result = $conn -> query($sql);
    $_SESSION["delete"] = "The file has been successfully deleted!";
    header("Location: ../admin-panel/pages/resource.php");
    
    ?>