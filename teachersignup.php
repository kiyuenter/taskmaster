<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TMAH | LOGIN</title>
    <link rel="stylesheet" href="css/teachersignup.css">
    <link rel="stylesheet" href="css/preloader.css">
    <link rel="icon" href="photo/logo.png">
    <link rel="stylesheet" href="css/alertValidation.css">
    <link rel="stylesheet" href="css/country-dropdown.css">
    <link rel="gettext" type="application/x-po" href="js/en.po" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
</head>
<body>
    <div id="pageloader"></div>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="php/teacherRegistration.php" method="POST" onsubmit="return validatePassword()">
                <h1>Create Account</h1>
                <hr style="width: 100%; margin: 10px; border: 2px solid #6f16aa;">
                <span>or use your email for registeration</span>
                <div class="form-align">
                    <div class="info-1">
                        <input type="text" id="fName" placeholder="First Name" name="fName" required>
                        <input type="text" id="lName" placeholder="Last Name" name="lName" required>
                        <input type="email" placeholder="Email" name="email" required>
                                        <?php
                                            if(isset($_SESSION['error']))
                                            {
                                                echo $_SESSION['error'];
                                                unset($_SESSION['error']);
                                            }
                                        ?>
                        <input type="password" placeholder="Password" name="Password" id="password" required>
                        <div style="margin-left: 15px;" class="gender">
                            <span>Gender</span>
                            <div class="male">
                                <input type="radio" name="gender" id="male" value="Male" required>
                                <label for="male">Male</label>
                            </div>
                            <div class="female">
                                <input type="radio" name="gender" id="female" value="Female" required>
                                <label for="female">Female</label>
                            </div>
                        </div>
                    </div>
                    <div class="info-2">
                        <div class="dob">
                            <label for="dob">Date of Birth</label>
                            <input type="date" id="dob" name="dob" required>
                        </div>
                        <div class="dob" style="margin-bottom: 20px;">
                            <label for="dob" style="width: 20%;">Country</label>
                            <select style="width: 77%;" class="gds-cr" country-data-region-id="gds-cr-one" data-language="en" name="country" required></select>
                        </div>
                        <div class="select-dep">
                            <p>Level of Education</p>
                            <select name="edu" id="lvlofedu" title="Select" required>
                                <option value="select">Select</option>
                                <option value="high">High School</option>
                                <option value="college">Collage</option>
                            </select>
                            <select title="dep-title" name="department" id="department" required disabled>
                                <option value="">Select Department</option>
                            </select>
                            <select title="dep-title" name="academic" id="acadamic" required disabled>
                                <option value="acadeg">Acadamic Degree</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button class="button" type="submit">Sign Up</button>
            </form>
        </div>
    </div>
    <script src="js/joinScript.js"></script>
    <script src="js/loader.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/country-dropdown.js"></script>
    <script type="text/javascript" src="js/Gettext.js"></script>

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
                    departmentSelect.options.add(new Option("Mathematics"));
                    departmentSelect.options.add(new Option("English"));
                    departmentSelect.options.add(new Option("Amharic"));
                    departmentSelect.options.add(new Option("Science"));
                    departmentSelect.options.add(new Option("Art"));
                
                } else if (selectedLevel === "college") {
                    departmentSelect.innerHTML = ""; // Clear existing options
                    departmentSelect.options.add(new Option("Department"));
                    departmentSelect.options.add(new Option("Accounting and Finance"));
                    departmentSelect.options.add(new Option("Human Resources Management"));
                    departmentSelect.options.add(new Option("Management"));
                    departmentSelect.options.add(new Option("Marketing"));
                    departmentSelect.options.add(new Option("Engineering"));
                    departmentSelect.options.add(new Option("Computer Science"));
                    
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
        const selectedLevel = educationLevelSelect.value;
        const selectDep = departmentSelect.value;
        acadamicSelect.disabled = true; // Disable acadamic department
        
        if (selectDep === "" || selectDep === "Department") {
            acadamicSelect.disabled = true;
        } else {
            acadamicSelect.disabled = false;
            acadamicSelect.innerHTML = "";
            acadamicSelect.options.add(new Option("Select"));
            acadamicSelect.options.add(new Option("BA"));
            acadamicSelect.options.add(new Option("BSc"));
            acadamicSelect.options.add(new Option("BFA"));
            acadamicSelect.options.add(new Option("BAS"));
            acadamicSelect.options.add(new Option("MA"));
            acadamicSelect.options.add(new Option("MSc"));
            acadamicSelect.options.add(new Option("MFA"));
            acadamicSelect.options.add(new Option("Ph.D"));
            acadamicSelect.options.add(new Option("Ed.D"));
            acadamicSelect.options.add(new Option("M.D"));
        }
        if(selectedLevel === "select" || selectedLevel === "high") {
            acadamicSelect.disabled = true;
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
</body>
</html>