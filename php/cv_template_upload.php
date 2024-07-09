<?php
session_start();
include 'connection.php';

function uploadAndSaveFile($fileKey, $columnName, $cvLocation, $conn, &$successFlag) {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES[$fileKey])) {
        $targetDir = "../photo/cvImage/";
        $fileExtension = pathinfo($_FILES[$fileKey]["name"], PATHINFO_EXTENSION);
        $uniqueFileName = uniqid() . '.' . $fileExtension;
        $targetFile = $targetDir . $uniqueFileName;

        if (move_uploaded_file($_FILES[$fileKey]["tmp_name"], $targetFile)) {
            $updateQuery = "INSERT INTO cv_template ($columnName, cv_path) VALUES ('$uniqueFileName', '$cvLocation')";
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cvLocation = $_POST['cv_location'];
    $successFlag = false;

    uploadAndSaveFile("cover_image", "cover_image", $cvLocation, $conn, $successFlag);

    if ($successFlag) {
        echo "File has been uploaded successfully.";
    } else {
        echo "No files were uploaded successfully.";
    }
}

$conn->close();
?>
