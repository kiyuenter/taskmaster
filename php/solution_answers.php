<?php
    session_start();
 include 'connection.php';
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;
 require '../vendor/autoload.php';


 $question = $_POST["question"];
 $askerEmail = $_POST["askerEmail"];
 $askerName = $_POST["askerName"];
 $username = $_POST["username"];
 $email = $_POST["email"];
 $solutionA = $_POST["solution_a"];
 $solve =  "solved";

$sql = "UPDATE askedquestions SET solution_answer = '$solutionA', solverEmail =  '$email', solverUsername = '$username', statuss = '$solve' WHERE question = '$question'";
if ($conn -> query($sql)) {
    $successFlag = true;
    $msg  = "<script>alert('Your answer is successfully submitted. Thank you!')</script>";
    $_SESSION["answers"] = $msg;

    // Send emal for student or asker
        // Load Composer's autoloader
        // Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                      // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'taskmaster.helper.info@gmail.com';     // SMTP username
            $mail->Password   = 'eksgdkzrakopchny';                         // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Enable implicit TLS encryption
            $mail->Port       = 465;                                    // TCP port to connect to

            // Recipients
            $mail->setFrom('taskmaster.helper.info@gmail.com', 'Taskmaster Helper');
            $mail->addAddress($askerEmail, $askerName);  // Add a recipient

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = "Solved!";
            $mail->Body    = "Dear ".$askerName.", Congra your question is solved.";
            $mail->AltBody = 'With best regards,';

            $mail->send();

            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    header("Location: ../teacher-panel/askedQuestion.php");
} else {
    echo "Error updating database: " . $conn->error;
}
?>