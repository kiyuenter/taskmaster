<?php
    include "connection.php";

    $asker = $_POST['askerEmail'];
    $solver = $_POST['solverEmail'];
    $question = $_POST['question'];

    $sql = "UPDATE stud_feedback FROM askedQuestions WHERE askerEmail = '$asker', solverEmail = '$solver', question = '$question'";
    $result = query($conn, $sql);


?>