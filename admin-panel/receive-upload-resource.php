<?php

include "../php/connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Get form data
  $title = $_POST['title'];
  $description = $_POST['description'];
  $category = $_POST['category'];
  $pageCount = (int)$_POST['pageCount'];

  // Handle cover image upload (**Note:** This is a basic example)
  if (isset($_FILES['coverImage']) && $_FILES['coverImage']['error'] === 0) {
    $target_dir = "../resource/covers/"; // Separate directory for cover images
    $target_file = $target_dir . basename($_FILES["coverImage"]["name"]);
    $coverImg = $target_file; // Store the uploaded file path
    move_uploaded_file($_FILES["coverImage"]["tmp_name"], $target_file);
  } else {
    echo "Error uploading cover image.";
  }

  // Handle resource file upload (if provided)
  if (isset($_FILES['resourceFile']) && $_FILES['resourceFile']['error'] === 0) {
    $target_dir = "../resource/"; // Separate directory for resource files
    $target_file = $target_dir . basename($_FILES["resourceFile"]["name"]);
    $uploadedFileName = $target_file; // Store the uploaded filename
    move_uploaded_file($_FILES["resourceFile"]["tmp_name"], $target_file);
  } else {
    echo "Error uploading the resource file.";
  }

  // ... (Prepare SQL statement)

  // Update to include both coverImg and uploadedFileName
  $sql = "INSERT INTO resources (coverimg, resourcefile, title, description, category, pagecount) VALUES (?, ?, ?, ?, ?, ?)";
  $stmt = mysqli_prepare($conn, $sql);
  // ... (Prepare statement and bind parameters)

  // Bind both coverImg and uploadedFileName parameters
  $stmt->bind_param("ssssss", $coverImg, $title, $description, $category, $pageCount, $uploadedFileName);

  // ... (Execute statement and handle success/error)

}

?>
