<?php
include 'connection.php';
// Retrieving answers from the form
$email = $_POST['email'];
$type = $_POST['eduType'];
$additionalName = 'masters_';
$additionalNameP = 'phd_';

if ($type == 'degree') {
$question1 = $_POST['ques1'];
$question2 = $_POST['ques2'];
$question3 = $_POST['ques3'];
$question4 = $_POST['ques4'];
$question5 = $_POST['ques5'];
$question6 = $_POST['ques6'];
$question7 = $_POST['ques7'];
$question8 = $_POST['ques8'];
$question9 = $_POST['ques9'];
$question10 = $_POST['ques10'];

//Answer fetch from form
$answer1= $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];
$answer4 = $_POST['answer4'];
$answer5 = $_POST['answer5'];
$answer6 = $_POST['answer6'];
$answer7 = $_POST['answer7'];
$answer8 = $_POST['answer8'];
$answer9 = $_POST['answer9'];
$answer10 = $_POST['answer10'];
//Insert into database
$insert = "INSERT INTO teacherevaanswer (teachEmail, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10) values('$email','$question1','$question2','$question3','$question4','$question5','$question6','$question7','$question8','$question9', '$question10')";
$conn->query($insert);
// Initializing variables to store grades
$grade1 = 0;
$grade2 = 0;
$grade3 = 0;
$grade4 = 0;
$grade5 = 0;
$grade6 = 0;
$grade7 = 0;
$grade8 = 0;
$grade9 = 0;
$grade10 = 0;

// Grading each question
if ($question1 == $answer1) {
    $grade1 = 1;
}

if ($question2 == $answer2) {
    $grade2 = 1;
}

if ($question3 == $answer3) {
    $grade3 = 1;
}

if ($question4 == $answer4) {
    $grade4 = 1;
}

if ($question5 == $answer5) {
    $grade5 = 1;
}

if ($question6 == $answer6) {
    $grade6 = 1;
}

if ($question7 == $answer7) {
    $grade7 = 1;
}

if ($question8 == $answer8) {
    $grade8 = 1;
}

if ($question9 == $answer9) {
    $grade9 = 1;
}

if ($question10 == $answer10) {
    $grade10 = 1;
}
$total = 0;
// Calculating total score
$total = $grade1 + $grade2 + $grade3 + $grade4 + $grade5 + $grade6 + $grade7 + $grade8 + $grade9 + $grade10;

// Output total score
if ($total > 8) {
    echo "You are successfully passed.<br> Your score is $total/10.<br> Welcome to teacher partner.";

} else {
    echo "I am sorry you are not eligable to receive teacher partner. Your score is $total/10.";
}

} elseif ($type == 'masters') {    
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_FILES['uploadFile']) && $_FILES['uploadFile']['error'] === 0) {
    $targetDir = "../teacher-Evaluation-Doc/";

    // Get original file name and extension
    $originalFileName = $_FILES['uploadFile']['name'];
    $fileExt = pathinfo($originalFileName, PATHINFO_EXTENSION);

    // Generate new file name with username and prefix
    $newFileName = $additionalName . $email . "." . $fileExt;

    // Move uploaded file to the target directory with the new name
    $uploadPath = $targetDir . $newFileName;
    if (move_uploaded_file($_FILES['uploadFile']['tmp_name'], $uploadPath)) {
      echo "We will send the confirmation email with your email address. Please check after 24 hours.<br> The file is saved by name: " . $newFileName;

    } else {
      echo "Error uploading file!";
    }
    }
    else {
      echo "No file uploaded or upload error";
    }
  }
} elseif ($type == 'phd') {

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['uploadFile']) && $_FILES['uploadFile']['error'] === 0) {
        $targetDir = "../teacher-Evaluation-Doc/";
    
        // Get original file name and extension
        $originalFileName = $_FILES['uploadFile']['name'];
        $fileExt = pathinfo($originalFileName, PATHINFO_EXTENSION);
    
        // Generate new file name with username and prefix
        $newFileName = $additionalNameP . $email . "." . $fileExt;
    
        // Move uploaded file to the target directory with the new name
        $uploadPath = $targetDir . $newFileName;
        if (move_uploaded_file($_FILES['uploadFile']['tmp_name'], $uploadPath)) {
          echo "We will send the confirmation email with your email address. Please check after 48 hours.";
          echo "<br> The file is saved by name: " . $newFileName;
        } else {
          echo "Error uploading file!";
        }
        }
        else {
          echo "No file uploaded or upload error";
        }
      }
}
?>