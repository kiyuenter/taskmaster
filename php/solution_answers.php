<?php
    session_start();
 include 'connection.php';

 $question = $_POST["question"];
 $username = $_POST["username"];
 $email = $_POST["email"];
 $solutionA = $_POST["solution_a"];
 $solve =  "solved";

$sql = "UPDATE askedquestions SET solution_answer = '$solutionA', solverEmail =  '$email', solverUsername = '$username', statuss = '$solve' WHERE question = '$question'";
if ($conn -> query($sql)) {
    $successFlag = true;
    $msg  = "<script>alert('Your answer is successfully submitted. Thank you!')</script>";
    $_SESSION["answers"] = $msg;
    header("Location: ../teacher-panel/askedQuestion.php");
} else {
    echo "Error updating database: " . $conn->error;
}
?>