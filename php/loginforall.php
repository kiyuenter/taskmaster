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
    exit;
  }

  $selectStudent = "SELECT * FROM studentaccount WHERE emailAdd='$userEmail' AND sPassword = '$userPass'";
  $sResult = mysqli_query($conn, $selectStudent);

  $selectTeacher = "SELECT * FROM teacheraccount WHERE emailAdd='$userEmail' AND tPassword = '$userPass'";
  $tResult = mysqli_query($conn, $selectTeacher);

  $selectAdmin = "SELECT * FROM admin_account WHERE email='$userEmail' AND APassword = '$userPass'";
  $aResult = mysqli_query($conn, $selectAdmin);
  
  if (mysqli_num_rows($sResult) > 0) {
    $row = $sResult->fetch_assoc(); 
    $_SESSION['status'] = "Welcome back!";
    $_SESSION['username'] = $row["FName"];
    $_SESSION['emailA'] = $row["emailAdd"];

    echo "Login successful!";
    header("Location: ../index.php");
  } else if(mysqli_num_rows($aResult) > 0) {
    $row = $aResult -> fetch_assoc();
    $_SESSION['status'] = "Welcome back!";
    $_SESSION['username'] = $row["username"];
    $_SESSION['emailA'] = $row["email"];
    header("Location: ../admin-panel/dashboard.php");

  } else if (mysqli_num_rows($tResult) > 0) {
    $row = $tResult->fetch_assoc();
    $st = $row["statusActivity"];

    if ($st == "Disable")
    {
      $_SESSION['disable'] = "Your account is disabled, please contact the admin.";

      header("Location: ../join.php");
    } else {
    $_SESSION['status'] = "Welcomeback!";
    $_SESSION['username'] = $row["FName"]; 
    $_SESSION['email'] = $row["emailAdd"];
    echo "Login successful!";
    header("Location: ../teacher-panel/dashboard.php");
  }
  } else {
    $_SESSION['status'] = "<p style='background-color: #f5d167; border-radius: 10px; padding: 5px; text-align: center; margin-bottom: -30px;'>Invalid email or password.<p>";
    header("Location: ../join.php");
  }
}
?>