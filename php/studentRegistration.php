<?php
    include 'connection.php';
$FName = $_POST['fName'];
$LName = $_POST['lName'];
$emailAdd = $_POST['email'];
$sPassword = md5($_POST['Password']);

$insert = "insert into studentaccount(FName, LName, emailAdd, sPassword) values('$FName','$LName','$emailAdd','$sPassword')";
$conn -> query($insert);

$msg = "Account is successfully created. Thanks for join us. Please login now.";
echo "<script>
        alert('$msg');
      </script>";
?>
