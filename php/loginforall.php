<?php
include "connection.php";

session_start();

if (isset($_POST['submit'])) {
  $userEmail = $_POST['uEmail'];
  $userPass = md5($_POST['Password']);

  // Check if username or password is empty
  if (empty($userEmail) || empty($userPass)) {
    $_SESSION['status'] = "<p style='background-color: #f5d167; border-radius: 10px; padding: 5px; text-align: center; margin-bottom: -30px;'>Please enter your email and password.<p>";
    header("Location: ../join.php");
    exit; // Exit script to prevent further execution
  }

  $selectStudent = "SELECT * FROM studentaccount WHERE emailAdd='$userEmail' AND sPassword = '$userPass'";
  $sResult = mysqli_query($conn, $selectStudent);

  $selectTeacher = "SELECT * FROM teacheraccount WHERE emailAdd='$userEmail' AND tPassword = '$userPass'";
  $tResult = mysqli_query($conn, $selectTeacher);

  // Debugging: Print retrieved email and password for verification
  echo "Email: " . $userEmail . "<br>";
  echo "Password (hashed): " . $userPass . "<br>";

  if (mysqli_num_rows($sResult) > 0 || mysqli_num_rows($tResult) > 0) {
    $_SESSION['status'] = "Welcomeback!";

    // Debugging: Echo success message before redirection
    echo "Login successful!";

    header("Location: ../index.php");
  } else {
    $_SESSION['status'] = "<p style='background-color: #f5d167; border-radius: 10px; padding: 5px; text-align: center; margin-bottom: -30px;'>Invalid email or password.<p>";
    header("Location: ../join.php");
  }
}
?>