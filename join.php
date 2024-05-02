<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TMAH | LOGIN</title>
    <link rel="stylesheet" href="css/join.css">
    <link rel="stylesheet" href="css/preloader.css">
    <link rel="icon" href="photo/logo.png">
    <link rel="stylesheet" href="css/alertValidation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>

<body>
    <div id="pageloader"></div>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="php/studentRegistration.php" method="POST" onsubmit="return validatePassword()">
                <h1>Create Account</h1>
                <hr style="width: 100%; margin: 10px; border: 2px solid #6f16aa;">
                <span>Insert your email for registeration</span>
                <input type="text" placeholder="First Name" id="fName" name="fName" required>
                <input type="text" placeholder="Last Name" id="lName" name="lName" required>
                <input type="email" placeholder="Email" name="email" required>
                <input type="password" placeholder="Password" name="Password" id="password" required>
                <div class="select-dep">
                    <p>Level of Education</p>
                    <select name="lvlofedu" id="lvlofedu" title="Select" required>
                        <option value="select">Select</option>
                        <option value="high">High School</option>
                        <option value="college">Collage</option>
                    </select>
                    <select title="dep-title" name="department" id="department" required disabled>
                        <option value="">Select Department</option>
                    </select>
                </div>
                <button class="button google-sign-in-button" type="submit" id="sign-in-button">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="php/loginforall.php" method="POST">
                <?php
                if(isset($_SESSION['error']))
                {
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                }
                if(isset($_SESSION['status']))
                {
                    echo $_SESSION['status'];
                    unset($_SESSION['status']);
                }
                if (isset($_SESSION['disable'])) {
                    echo '<script>alert("' . htmlspecialchars($_SESSION['disable']) . '");</script>';
                    unset($_SESSION['disable']);
                  }
                  
            ?>
                <h1>Sign In</h1>
                <hr style="width: 100%; margin: 10px; border: 2px solid #6f16aa;">
                <span>Insert your email address, and password</span>
                <input type="email" placeholder="Email" name="uEmail" required>
                <input type="password" placeholder="Password" name="Password" required>
                <a href="#">Forget Your Password?</a>
                <button id="sign-in-button" class="button google-sign-in-button" type="submit" name="submit">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden button" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden button" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="js/joinScript.js"></script>
    <script src="js/loader.js"></script>
    <script src="js/validation.js"></script>
</body>
<script>
    // FName and LName input tag accept only text
    const firstNameInput = document.getElementById('fName');
const lastNameInput = document.getElementById('lName');

firstNameInput.addEventListener('keypress', (event) => {
  const char = String.fromCharCode(event.charCode); // Get the character typed
  const pattern = /^[A-Za-z\s]+$/; // Regular expression for letters and spaces

  if (!pattern.test(char)) {
    event.preventDefault(); // Prevent character insertion if not a letter or space
  }
});

lastNameInput.addEventListener('keypress', (event) => {
  const char = String.fromCharCode(event.charCode); // Get the character typed
  const pattern = /^[A-Za-z\s]+$/; // Regular expression for letters and spaces

  if (!pattern.test(char)) {
    event.preventDefault(); // Prevent character insertion if not a letter or space
  }
});

</script>

<script>
    // -------- Enable department
const educationLevelSelect = document.getElementById("lvlofedu");
const departmentSelect = document.getElementById("department");
const acadamicSelect = document.getElementById("acadamic");

function updateDepartmentOptions() {
  const selectedLevel = educationLevelSelect.value;
  departmentSelect.disabled = true; // Disable department selection initially
  if (selectedLevel === "select") {
            departmentSelect.innerHTML = "";
            departmentSelect.disabled = true;
        } else if (selectedLevel === "high") {
            departmentSelect.innerHTML = ""; // Clear existing options
            departmentSelect.options.add(new Option("Department"));
            departmentSelect.options.add(new Option("Maths"));
            departmentSelect.options.add(new Option("English"));
            departmentSelect.options.add(new Option("Amharic"));
            departmentSelect.options.add(new Option("Science"));
            departmentSelect.options.add(new Option("Art"));
            // Add relevant High School department options here (e.g., Math, English, Science)
        } else if (selectedLevel === "college") {
            departmentSelect.innerHTML = ""; // Clear existing options
            departmentSelect.options.add(new Option("Department"));
            departmentSelect.options.add(new Option("Accounting and Finance"));
            departmentSelect.options.add(new Option("Human Resources Management"));
            departmentSelect.options.add(new Option("International Business"));
            departmentSelect.options.add(new Option("Management Information System"));
            departmentSelect.options.add(new Option("Marketing"));
            departmentSelect.options.add(new Option("Operation Management"));
            departmentSelect.options.add(new Option("Entrepreneurship"));
            departmentSelect.options.add(new Option("Engineering"));
            departmentSelect.options.add(new Option("Civil Engineering"));
            departmentSelect.options.add(new Option("Computer Engineering"));
            departmentSelect.options.add(new Option("Nursing"));
            departmentSelect.options.add(new Option("Law"));
            departmentSelect.options.add(new Option("Medicine"));
            departmentSelect.options.add(new Option("Public Health"));
            // Add relevant College department options here (e.g., Computer Science, Engineering, Art)
        } else {
            departmentSelect.innerHTML = ""; // Clear existing options
            departmentSelect.options.add(new Option("Select Department")); // Default option
        }

        if (selectedLevel !== "") {
            departmentSelect.disabled = false; // Enable department selection after choosing a level
        }

        if (selectedLevel === "select") {
    departmentSelect.disabled = true; // Enable department selection after choosing a valid level
  }
        }

educationLevelSelect.addEventListener("change", updateDepartmentOptions);

// Call the function initially to set the disabled state
updateDepartmentOptions();

function updateAcedamicOption() {
  const selectDep = departmentSelect.value;
  acadamicSelect.disabled = true; // Disable acadamic department

  if (selectDep === "" || selectDep === "Department") {
    acadamicSelect.disabled = true;
  } else {
    acadamicSelect.disabled = false;
    acadamicSelect.innerHTML = "";
    acadamicSelect.options.add(new Option("BSc"));
    acadamicSelect.options.add(new Option("MA"));
    acadamicSelect.options.add(new Option("MSc"));
  }
}

departmentSelect.addEventListener("change", updateAcedamicOption);
updateAcedamicOption();

// Form validation and popup message
const form = document.querySelector("form"); // Assuming your form has a tag
form.addEventListener("submit", (event) => {
  if (educationLevelSelect.value === "select" || departmentSelect.value === "" || departmentSelect.value === "Department") {
    event.preventDefault(); // Prevent form submission

    alert("Please select a valid Level of Education, Department, and Academic Degree."); // Display popup message
  }
});

        

</script>
</html>