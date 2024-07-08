<?php
include 'connection.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$teacher_id = $_POST['teacher_email'];
$rating = $_POST['rating'];

$sql = "INSERT INTO ratings (teacher_email, rating) VALUES ('$teacher_email', '$rating')";

if ($conn->query($sql) === TRUE) {
    echo "New rating recorded successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
