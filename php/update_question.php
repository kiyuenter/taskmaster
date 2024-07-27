<?php
    session_start();
    include "connection.php";

    $question = $_POST['evaDetail'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $an = $_POST['answer'];
    $de = $_POST['department'];

    $sql = "UPDATE evaluationque SET A = '$a', B = '$b', C = '$c', D = '$d', departQ = '$de', answer = '$an' WHERE evaDetail = '$question'";    
    
    if($conn -> query($sql) === TRUE) {
        $_SESSION['msg'] = "The question is updated";

        header("Location: ../admin-panel/pages/evaluations_pages/questions.php");
    } else {
        $_SESSION['msg'] = "Sorry, error occured please submite again";
        header("Location: ../admin-panel/pages/evaluations_pages/questions.php");
    }

?>