<?php
    include "connection.php";

    session_start();

    if(isset($_POST['submit'])) {    
        $userEmail = $_POST['uEmail'];
        $userPass = $_POST['uPassword'];

        $selectStudent = "SELECT * FROM studentaccount WHERE emailAdd='$userEmail' AND sPassword = '$userPass'";
        $sResult = mysqli_query($conn, $selectStudent);

        $selectTeacher = "SELECT * FROM teacheraccount WHERE emailAdd='$userEmail' AND sPassword = '$userPass'";
        $tResult = mysqli_query($conn, $selectTeacher);

        if(mysqli_num_rows($sResult) > 0) {
            $_SESSION['status'] = "Welcomeback!";
            header("Location: ../index.html");
        }

        else {
            $_SESSION['status'] = "<p style='background-color: #f5d167; border-radius: 10px; padding: 5px; text-align: center; margin-bottom: -30px;'>Please check your email and password, it's invalid.<p>";
            header("Location: ../join.php");
        }
    }
?>