<?php
    session_start();

    include "connection.php";

    $asker = $_POST['askerEmail'];
    $solver = $_POST['solverEmail'];
    $question = $_POST['question'];
    $feedback = $_POST['feedback'];

    $sql = "UPDATE askedQuestions SET studentFeedback = '$feedback' WHERE askerEmail = '$asker' AND solverEmail = '$solver' AND question = '$question'";    
    
    if($conn -> query($sql) === TRUE) {
        $_SESSION['msg'] = "Thankyou for your feedback";

        header("Location: ../pages/studQuestions.php");
    } else {
        $_SESSION['msg'] = "Sorry, error occured please submite again";
        header("Location: ../pages/studQuestions.php");
    }


?>