<?php
  include "connection.php";
  $userPass = md5($_POST['Password']);
echo $userPass;
//   session_start();

//   if (isset($_POST['submit'])) {
//     $userEmail = $_POST['uEmail'];
//     $userPass = md5($_POST['uPassword']);

//     // Check if username or password is empty
//     if (empty($userEmail) || empty($userPass)) {
//     $_SESSION['status'] = "<p style='background-color: #f5d167; border-radius: 10px; padding: 5px; text-align: center; margin-bottom: -30px;'>Please enter your email and password.<p>";
//       header("Location: ../join.php");
//       exit; // Exit script to prevent further execution
//     }

//     $selectStudent = "SELECT * FROM studentaccount WHERE emailAdd='$userEmail' AND sPassword = '$userPass'";
//     $sResult = mysqli_query($conn, $selectStudent);

//     $selectTeacher = "SELECT * FROM teacheraccount WHERE emailAdd='$userEmail' AND tPassword = '$userPass'";
//     $tResult = mysqli_query($conn, $selectTeacher);

//     if (mysqli_num_rows($sResult) > 0 || mysqli_num_rows($tResult) > 0) {
//       $_SESSION['status'] = "Welcomeback!";
//       header("Location: ../index.php");
//     } else {
//         $_SESSION['status'] = "<p style='background-color: #f5d167; border-radius: 10px; padding: 5px; text-align: center; margin-bottom: -30px;'>Invalid email or password.<p>";
    //   header("Location: ../join.php");
//     }
//   }
?>
