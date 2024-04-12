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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
</head>
<body>
    <div id="pageloader"></div>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="php/studentRegistration.php" method="POST" onsubmit="return validatePassword()">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registeration</span>
                <input type="text" placeholder="First Name" name="fName" required>
                <input type="text" placeholder="Last Name" name="lName" required>
                <input type="email" placeholder="Email" name="email" required>
                <input type="password" placeholder="Password" name="Password" id="password" required>
                <button class="button" type="submit">Sign Up</button>
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
            ?>
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email password</span>
                <input type="email" placeholder="Email" name="uEmail" required>
                <input type="password" placeholder="Password" name="Password" required>
                <a href="#">Forget Your Password?</a>
                <button class="button" type="submit" name="submit">Sign In</button>
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
</html>