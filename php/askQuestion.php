<?php

// Process form data
$subject = $_POST['subject'];
$course = $_POST['course'];
$otherCourse = $_POST['other_course'];
$question = $_POST['question'];

// Validate and sanitize data (important!)
// ... (omitted for brevity)

// Handle file upload (optional)
if (isset($_FILES['attachment'])) {
  // ... (file upload logic omitted)
}

// Send notification or store question in database
// ... (omitted for brevity)

// Show success or error message
echo "Thank you for your question! We will get back to you soon.";

?>
