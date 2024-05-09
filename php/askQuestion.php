<?php

  include "connection.php";

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $subject = $_POST["subject"];
      $course = $_POST["course"];
      $degree = $_POST["degType"];
      $courseC = $_POST["course_code"];
      $deadline = $_POST["deadline"];
      $question = $_POST["question"];
      $statuss = $_POST["statuss"];
      if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] === 0) {
        $target_dir = "../askedQuestions_attachment/";
        $target_file = $target_dir . basename($_FILES["attachment"]["name"]);
        $attach = $target_file;
        move_uploaded_file($_FILES["attachment"]["tmp_name"], $target_file);

       $sql = "INSERT INTO askedquestions(subjects, course, degree, course_code, question, deadln, attachment, statuss) VALUES('$subject','$course','$degree','$courseC','$question','$deadline','$attach','$statuss')";
        $conn -> query($sql);
       echo "Successfully asked";
      } else {
        $sql = "INSERT INTO askedquestions(subjects, course, degree, course_code, question, deadln, statuss) VALUES('$subject','$course','$degree','$courseC','$question','$deadline','$statuss')";
        $conn -> query($sql);
        echo "Successfully asked2";
      }
  }


?>
