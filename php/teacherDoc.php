<?php
    session_start();

    $IDCard = $_POST['IDc'];
    $EduDoc = $_POST['EDd'];
    $TCV = $_POST['CRv'];

    echo $IDCard."<br>".$EduDoc."<br>".$TCV;
    
?>