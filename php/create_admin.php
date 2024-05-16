<?php
    session_start();
    include 'connection.php';

      $username = $_POST["username"];
      $email = $_POST["email"];
      $password = md5($_POST["password"]);
      
      $sql = "SELECT email FROM admin_account";
      $result = mysqli_query($conn, $sql);
      
      if(mysqli_num_rows($result) > 0) {
        $row = $result->fetch_assoc();
        if($row['email'] == $email) {
            $_SESSION['msg'] = "This account is already registered";

            header("Location: ../admin-panel/pages/admin_account.php");
        } else {
            $sql = "INSERT INTO admin_account (username, email, APassword) VALUES ('$username','$email','$password')";
            $conn -> query($sql);
            $_SESSION['registerd'] = "Account successfully created!";     
            header("Location: ../admin-panel/pages/admin_account.php");
        }
      }

      
      
?>