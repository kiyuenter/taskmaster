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

    $increment = "SET  @num := 0;";
    $increment2 = "update evaluationque set QID = @num := (@num+1);";
    $increment3 = "alter table evaluationque AUTO_INCREMENT =1;";
    $conn -> query($increment);
    $conn -> query($increment2);
    $conn -> query($increment3);

    header("Location:../admin-panel/evaluationQuestion.html");
?>