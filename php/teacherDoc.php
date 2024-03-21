<?php

    include 'connection.php';

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["IDc"])) {

        $targetDir = "../teacherfiles/";

        $fileName = $_FILES["IDc"]["name"];
        $targetFile = $targetDir . $fileName;

        if(move_uploaded_file($_FILES["IDc"]["tmp_name"], $targetFile)) {
            echo "The file ".$fileName." has been upload successfully.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["EDd"])) {

        $targetDir = "../teacherfiles/";

        $fileName = $_FILES["EDd"]["name"];
        $targetFile = $targetDir . $fileName;

        if(move_uploaded_file($_FILES["EDd"]["tmp_name"], $targetFile)) {
            echo "The file ".$fileName." has been upload successfully.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["CRv"])) {

        $targetDir = "../teacherfiles/";

        $fileName = $_FILES["CRv"]["name"];
        $targetFile = $targetDir . $fileName;

        if(move_uploaded_file($_FILES["CRv"]["tmp_name"], $targetFile)) {
            echo "The file ".$fileName." has been upload successfully.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

?>