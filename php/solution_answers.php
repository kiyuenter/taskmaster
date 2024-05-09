<?php
 include 'connection.php';

 $question = $_POST["question"];
 $username = $_POST["username"];
 $email = $_POST["email"];
 $solutionA = $_POST["solution_a"];

 echo $question.' <h2>Question</h2><br> ';
 echo $username.' <h2>Username</h2><br>';
 echo $email.' <h2>Email</h2><br>';
 echo $solutionA.' <h2>Solution</h2><br>';

?>