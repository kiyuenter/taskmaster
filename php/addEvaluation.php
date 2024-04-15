<?php
    include 'connection.php';

    $title = $_GET['title'];
    $a = $_GET['chooseA'];
    $b = $_GET['chooseB'];
    $c = $_GET['chooseC'];
    $d = $_GET['chooseD'];
    $answer = $_GET['answer'];
    $depa = $_GET['department'];

    $insert = "INSERT INTO evaluationque(evaDetail, A, B, C, D, departQ, answer) VALUES('$title','$a','$b','$c','$d','$depa','$answer')";
    $conn -> query($insert);
?>