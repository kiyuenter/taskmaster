<?php
include 'connection.php';
// Retrieving answers from the form
$email = $_POST['email'];
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

//Insert into database
$insert = "INSERT INTO teacherevaanswer (teachEmail, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10) values('$email','$question1','$question2','$question3','$question4','$question5','$question6','$question7','$question8','$question9', '$question10')";
$conn -> query($insert);
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
if ($question1 == 'Excellent') {
    $grade1 = 1;
}

if ($question2 == 'Very diverse') {
    $grade2 = 1;
}

if ($question3 == 'Very effectively') {
    $grade3 = 1;
}

if ($question4 == 'Highly engaged') {
    $grade4 = 1;
}

if ($question5 == 'Very effectively') {
    $grade5 = 1;
}

if ($question6 == 'Regularly and effectively') {
    $grade6 = 1;
}

if ($question7 == 'Very effectively') {
    $grade7 = 1;
}

if ($question8 == 'Extensively') {
    $grade8 = 1;
}

if ($question9 == 'Actively participates') {
    $grade9 = 1;
}

if ($question10 == 'Highly accessible and supportive') {
    $grade10 = 1;
}
 $total = 0;
// Calculating total score
$total = $grade1 + $grade2 + $grade3 + $grade4 + $grade5 + $grade6 + $grade7 + $grade8 + $grade9 + $grade10;

// Output total score
echo $email.$total;

?>
