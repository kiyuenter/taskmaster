<?php
    session_start();
    include 'connection.php';

function uploadAndSaveFile($fileKey, $columnName, $username, $conn, &$successFlag) {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES[$fileKey])) {
        $targetDir = "../teacherfiles/";
        $fileExtension = pathinfo($_FILES[$fileKey]["name"], PATHINFO_EXTENSION);
        $uniqueFileName = uniqid() . '.' . $fileExtension;
        $targetFile = $targetDir . $uniqueFileName;

        if (move_uploaded_file($_FILES[$fileKey]["tmp_name"], $targetFile)) {
            $updateQuery = "UPDATE teacheraccount SET $columnName = '$uniqueFileName' WHERE emailAdd = '$username'";
            if ($conn->query($updateQuery)) {
                $successFlag = true;
            } else {
                echo "Error updating database: " . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

$username = $_POST['username'];
echo $username . "<br>";

$successFlag = false;
uploadAndSaveFile("EDd", "EdPath", $username, $conn, $successFlag);
uploadAndSaveFile("CRv", "CvPath", $username, $conn, $successFlag);

$_SESSION['email'] = $username;

if ($successFlag) {
    echo "All files have been uploaded successfully.";
    header("Location:evaluationPage.php");
} else {
    echo "No files were uploaded successfully.";
    header("Location:attachment.php.php");
}

?>
