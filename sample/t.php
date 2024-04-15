<?php

// Function to identify MSc subfield (replace with your logic)
function identifySubfield($userInput) {
  // Implement logic to identify subfield based on user input or additional information
  // Here's a basic example using user input
  $keywords = [
    "computer science" => ["computer science", "algorithms", "programming"],
    "biology" => ["biology", "genetics", "ecology"],
    "physics" => ["physics", "mechanics", "quantum mechanics"],
  ];

  $userWords = explode(" ", strtolower($userInput)); // Convert to lowercase and split into words
  $bestMatch = "";
  $maxMatchCount = 0;

  foreach ($keywords as $subfield => $subfieldWords) {
    $matchCount = 0;
    foreach ($userWords as $word) {
      if (in_array($word, $subfieldWords)) {
        $matchCount++;
      }
    }
    if ($matchCount > $maxMatchCount) {
      $bestMatch = $subfield;
      $maxMatchCount = $matchCount;
    }
  }

  return $bestMatch;
}

// User input (replace with actual way you capture user input)
$chosenDepartment = $_GET["department"]; // Assuming department is passed through GET

if ($chosenDepartment === "MSc") {
  // Identify MSc subfield based on user input
  $subfield = identifySubfield($chosenDepartment);
  
  // Option 1: Generate Questions (replace with your question database)
  $questions = [
    "computer science" => [
      "What is the difference between supervised and unsupervised learning?",
      "Explain the concept of Big O notation.",
      "Describe the function of a compiler in computer science."
    ],
    "biology" => [
      "Explain the process of cellular respiration.",
      "What are the different types of DNA mutations?",
      "Describe the theory of evolution by natural selection."
    ],
    "physics" => [
      "What are the fundamental forces in nature?",
      "Explain the concept of momentum and its conservation law.",
      "Describe the photoelectric effect and its implications."
    ],
  ];

  // Option 2: Provide Links (replace with your search logic)
  $mscResources = [
    "A website with practice questions for various MSc programs: https://www.example.com/msc-practice-questions",
    "A university portal with past exam papers for MSc programs: https://www.university.edu/past-papers/msc"
  ];

  // Choose response method based on user preference (optional)
  $useGeneratedQuestions = isset($_GET["useQuestions"]) && $_GET["useQuestions"] == "true";

  if ($useGeneratedQuestions && isset($questions[$subfield])) {
    echo "<h3>MSc $subfield Questions:</h3>";
    foreach ($questions[$subfield] as $question) {
      echo "<p>$question</p>";
    }
  } else {
    echo "<h3>MSc Resources:</h3>";
    foreach ($mscResources as $resource) {
      echo "<a href='$resource'>$resource</a><br>";
    }
  }
} else {
  echo "Please choose a department.";
}

?>
