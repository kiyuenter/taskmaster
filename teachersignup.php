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
    <link rel="stylesheet" href="country-region-dropdown-menu/assets/css/geodatasource-countryflag.css">
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu/languages/en/LC_MESSAGES/en.po" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
</head>
<body>
    <div id="pageloader"></div>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="php/teacherRegistration.php" method="POST" onsubmit="return validatePassword()">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registeration</span>
                <div class="form-align">
                    <div class="info-1">
                        <input type="text" placeholder="First Name" name="fName" required>
                        <input type="text" placeholder="Last Name" name="lName" required>
                        <input type="email" placeholder="Email" name="email" required>
                        <input type="password" placeholder="Password" name="Password" id="password" required>
                    </div>
                    <div class="info-2">
                        <div class="gender">
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
                        <div class="dob">
                            <label for="dob">Date of Birth</label>
                            <input style="width: 71%;" type="date" id="dob" name="dob" required>
                        </div>
                        <div class="dob">
                            <label for="dob" style="width: 20%;">Country</label>
                            <select style="width: 77%;" class="gds-cr" country-data-region-id="gds-cr-one" data-language="en" name="country" required></select>
                        </div>
                        <div class="dob">
                            <label for="edl">Education Level</label>
                            <div class="edulevel">
                                <label for="ba">BA</label>
                                <input type="radio"name="edl" id="ba" value="Bachelor of Arts" required>
                            </div>
                            <div class="edulevel">
                                <label for="bsc">BSc</label>
                                <input type="radio"name="edl" id="bsc" value="Bachelor of Science" required>
                            </div>
                            <div class="edulevel">
                                <label for="ma">MA</label>
                                <input type="radio" name="edl" id="ma" value="Master of Arts" required>
                            </div>
                            <div class="edulevel">
                                <label for="msc">MSc</label>
                                <input type="radio" name="edl" id="msc" value="Master of Science" required>
                            </div>
                            <div class="edulevel">
                                <label for="mba">MBA</label>
                                <input type="radio" name="edl" id="mba" value="Master of Business Administration" required>
                            </div>
                            <div class="edulevel">
                                <label for="phd">PhD</label>
                                <input type="radio" name="edl" id="phd" value="Doctor of Philosophy" required>
                            </div>
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
    <script src="country-region-dropdown-menu/assets/js/geodatasource-cr.min.js"></script>
    <script type="text/javascript" src="country-region-dropdown-menu/assets/js/Gettext.js"></script>
</body>
</html>