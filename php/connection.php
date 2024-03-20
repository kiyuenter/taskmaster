<?php

    // Parameters of database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "taskmaster";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check database connection
    if ($conn->connect_error) {
        die("Database connection is failed please fix it. "->connect_error);
    }
    
?>