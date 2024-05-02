<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="icon" href="photo/logo.png">
    <link rel="stylesheet" href="css/preloader.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Taskmaster | Welcome</title>
    <style>
    .navbar-nav {
        margin: auto;
        display: flex;
        flex-direction: row;
    }

    .navbar-transparent,
    .dropdown-menu {
        background-color: #ffffff00 !important;
        background: linear-gradient(to top, #e2eef500, #d2eaf000) !important;
        transition: background-color 0.6s ease;
        color: white !important;
    }

    .navbar-scrolled {
        background-color: rgba(0, 0, 0, 0.678) !important;
        background: linear-gradient(to top, #98bfd8da, #fdffff) !important;
        transition: background-color 0.6s ease;
        border-bottom: 1px #42414134 solid;
        color: white;
    }

    .dr {
        background-color: #96055e !important;
        background: linear-gradient(to top, #98bfd8da, #98bfd8da) !important;
        border: none;
    }
    </style>
</head>

<body>
<div id="pageloader"></div>
    <div class="navigation">
        <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-transparent fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand text-dark" href="index.html"><img style="border-radius: 20px; margin-right: 5px;"
                        src="photo/logo.gif" alt="" width="50px">Taskmaster</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active text-dark me-4 text-center w-100" aria-current="page"
                                href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light text-dark me-4 text-center w-100"
                                href="pages/experts.html">Experts</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark me-4 text-center w-100 text-light" href="#"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Service
                            </a>
                            <ul class="dropdown-menu dr">
                                <li><a class="dropdown-item text-dark" href="pages/askQuestion.html">Ask Question</a>
                                </li>
                                <li><a class="dropdown-item text-dark" href="pages/cvTemplate.html">CV Maker</a></li>
                                <li><a class="dropdown-item text-dark" href="pages/resource.html">Resource</a></li>
                                <li><a class="dropdown-item text-dark" href="pages/faq.html">FAQ</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light text-dark me-4 text-center w-100"
                                href="pages/contactUs.html">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light text-dark me-4 text-center w-100"
                                href="pages/aboutUs.html">About Us</a>
                        </li>
                    </ul>

                    <?php
                            if(isset($_SESSION["status"]) && $_SESSION["status"] == true) {
                                echo '
                                <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-dark me-4 text-center w-100 text-light" href="#"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-person-circle" style="font-size: 24px;"></i>
                                    </a>
                                    <ul class="dropdown-menu dr login-des w-100">
                                        <div class="bg-info-subtle text-center w-100">
                                        <span class="p-2 text-success w-100">Welcome ' . $_SESSION["username"] . '😊</span>
                                        </div>
                                        <li><a class="dropdown-item text-dark" href="pages/askQuestion.html">Profile</a></li>
                                        <li><a class="dropdown-item text-dark" href="pages/cvTemplate.html">Asked Questions</a></li>
                                        <li><a class="dropdown-item text-dark" href="pages/resource.html">Setting</a></li>
                                        <li><a class="dropdown-item text-dark" href="php/logout.php" onclick="return confirm(\'Are you sure you want to logout?\');">Logout</a></li>
                                    </ul>
                                    </li>
                                </ul>';
                                } else {
                                echo '
                                <div class="d-flex" role="search">
                                    <a href="join.php" class="btn me-2 join-button">SIGN IN</a>
                                    <a href="accountType.html" class="btn join-button">JOIN US</a>
                                </div>';
                                }
                                ?>


                </div>
            </div>
    </div>
    </nav>
    </div>

    <div class="container-fluid div-1">
        <div class="row div-1 banner align-items-center justify-content-center">
            <div class="col-md-6 text-center">
                <img src="photo/taskmaster background.svg" alt="Taskmaster Background" class="img-fluid">
            </div>
            <div class="col-md-6">

                <h1 class="text-primary text-md-right">Welcome to <br><img src="photo/Task.png" alt="Task Logo"
                        style="max-width: 50px;" class="img-fluid"> askmaster Assignment Helper and CV Maker</h1>
                <p>Rest assured, we specialize in connecting you with top-tier assignment experts, ensuring
                    unparalleled
                    quality every step of the way.</p>
                <div class="scroll-down-btn text-center text-md-right">
                    <button onclick="scrollDown()">Scroll Down</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid div-2 mt-5 d-flex flex-column align-items-center justify-content-center">
        <div class="container row w-100 m-2 d-flex align-items-center justify-content-center">
            <div class="col-md-3">
                <div class="support-list">
                    <div class="search">
                        <i class="bi bi-search"></i>
                        <p>Research based Assignment</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="support-list">
                    <div class="search">
                        <i class="bi bi-bookmark-star"></i>
                        <p>Orginal Content</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="support-list">
                    <div class="search">
                        <i class="bi bi-browser-safari"></i>
                        <p>Browse anywhere</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="support-list">
                    <div class="search">
                        <i class="bi bi-infinity"></i>
                        <p>Infinity access resource</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container row w-100 m-2 d-flex align-items-center justify-content-center">
            <div class="col-md-3">
                <div class="support-list">
                    <div class="search">
                        <i class="bi bi-star"></i>
                        <p>Give your feedback</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="support-list">
                    <div class="search">
                        <i class="bi bi-stopwatch"></i>
                        <p>Get answers before deadline</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="support-list">
                    <div class="search">
                        <i class="bi bi-bell"></i>
                        <p>Turn on notification</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="support-list">
                    <div class="search">
                        <i class='bx bx-support'></i>
                        <p class="text-center">24/7 support</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5 pt-5 pb-5 div-3">
        <h2 class="text-center">These courses are covered by our experts.</h2>
        <p class="text-center">We provide top experts for the following courses</p>
        <div class="container">
            <div class="row">
                <div class="col-md-4 book-store d-flex justify-content-center align-items-center">
                    <img src="photo/book-store.jpg" alt="">
                </div>
                <div class="col-md-2 course-list">
                    <ul>
                        <li>Marketing</li>
                        <li>Business</li>
                        <li>Economics</li>
                        <li>CRM</li>
                        <li>History</li>
                        <li>Finance</li>
                        <li>HR</li>
                        <li>Accounting</li>
                        <li>English</li>
                        <li>Management</li>
                    </ul>
                </div>
                <div class="col-md-3 course-list">
                    <ul>
                        <li>Computer Architecture</li>
                        <li>Software Engineering</li>
                        <li>Computer Science</li>
                        <li>Information Technology</li>
                        <li>Database</li>
                        <li>Java</li>
                        <li>Python</li>
                        <li>C++</li>
                        <li>Web Development</li>
                        <li>C#</li>
                    </ul>
                </div>
                <div class="col-md-3 course-list">
                    <ul>
                        <li>MBA</li>
                        <li>MSc</li>
                        <li>Master of Applied Science</li>
                        <li>Master of Engineering</li>
                        <li>Business Enviroment</li>
                        <li>Psychology</li>
                        <li>Operation Management</li>
                        <li>Public Economics</li>
                        <li>Political Science</li>
                        <li>Travel & Tourism</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Promotion content startup -->
    <div class="container-1 container-fluid d-flex justify-content-center align-items-center">
        <div class="front-content row">
            <div class="img-1 col-md-6 w-50 d-flex justify-content-center">
                <img src="photo/assignment helper (1).jpg" alt="">
            </div>
            <div class="paragraph col-md-6 w-50 mt-5">
                <div class="mt-5 d-flex justify-content-center align-items-center">
                    <p class="text-center"><span class="text-success">Taskmaster:</span> <span>Empowering Your Academic
                            Journey</span></p>
                </div>
                <div class="definition">
                    <p>Taskmaster empowers you to take control of your academic journey. Our platform provides tools and
                        resources to manage your workload, prioritize tasks, and meet deadlines effectively.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-1 container-fluid d-flex justify-content-center align-items-center div-promotion py-5">
        <div class="front-content row">
            <div class="paragraph col-md-6 w-50 mt-5">
                <div class="mt-5 d-flex justify-content-center align-items-center">
                    <p class="text-center"><span class="text-success">CV Maker:</span> <span> Craft a Compelling Resume
                            That Gets Noticed!</span></p>
                </div>
                <div class="definition">
                    <p>Taskmaster goes beyond just assignment help. We offer personalized support and guidance to help
                        you develop strong study habits, improve your research skills, and gain a deeper understanding
                        of course material.</p>
                </div>
            </div>
            <div class="img-1 col-md-6 w-50 d-flex justify-content-center">
                <img src="photo/cvmaker-promotion.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="container-1 container-fluid d-flex justify-content-center align-items-center div-promotion-2 py-5">
        <div class="front-content row">
            <div class="img-1 col-md-6 w-50 d-flex justify-content-center">
                <img src="photo/taskmaster-promotion.jpg" alt="">
            </div>
            <div class="paragraph col-md-6 w-50 mt-5">
                <div class="mt-5 d-flex justify-content-center align-items-center">
                    <p class="text-center"><span class="text-success">Taskmaster:</span> <span>Boost Your Confidence and
                            Ace Your Assignments!</span></p>
                </div>
                <div class="definition">
                    <p>Taskmaster provides comprehensive resources and personalized feedback to help you grasp complex
                        concepts and gain a deeper understanding of your coursework.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-1 container-fluid d-flex justify-content-center align-items-center">
        <div class="front-content row">
            <div class="paragraph col-md-6 w-50 mt-5">
                <div class="mt-5 d-flex justify-content-center align-items-center">
                    <p class="text-center"><span class="text-success">CV Maker:</span> <span> Showcase Your Skills and
                            Land Your Dream Job</span></p>
                </div>
                <div class="definition">
                    <p>Our CV Maker guides you through highlighting your skills and experience in a way that grabs
                        attention and showcases your value to potential employers.</p>
                </div>
            </div>

            <div class="img-1 col-md-6 w-50 d-flex justify-content-center">
                <img src="photo/cvmaker-promotion-2.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- Promotion Endup -->


    <!-- testimonial -->
    <div class="container-fluid p-5 d-flex align-items-center justify-content-center div-4">
        <div id="carouselExampleIndicators" class="carousel slide test">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner w-100">
                <div class="carousel-item testimonial-img active w-100">
                    <div class="d-flex justify-content-center align-items-center w-100">
                        <div class="m-5 py-5 px-3 bg-test">
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="photo/testimonial-student-1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <p style="font-size: 24px; color: #96055e;">Hannan .T</p>
                            <p>TaskMaster Assignment Helper and CV Maker has been an absolute lifesaver for me. As a
                                busy professional juggling multiple responsibilities, I often found myself overwhelmed
                                with tasks and deadlines, especially when it came to crafting compelling resumes and
                                cover letters. However, since discovering TaskMaster, those worries have become a thing
                                of the past.</p>
                        </div>
                        <div class="m-5 py-5 px-3 bg-test">
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="photo/testimonial-student-2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <p style="font-size: 24px; color: #96055e;">Betelhem .W</p>
                            <p>Their assignment help service is unparalleled in quality and reliability. Whether it's a
                                challenging essay, a complex research paper, or a daunting presentation, TaskMaster's
                                team of experts consistently delivers outstanding results within my specified timeframe.
                                Their attention to detail and commitment to excellence truly set them apart.</p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item testimonial-img active w-100">
                    <div class="d-flex justify-content-center align-items-center w-100">
                        <div class="m-5 py-5 px-3 bg-test">
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="photo/testimonial-student-3.jpg" class="d-block w-100" alt="...">
                            </div>
                            <p style="font-size: 24px; color: #96055e;">Kebebush .T</p>
                            <p>Moreover, their CV Maker feature is a game-changer. Crafting a standout resume has never
                                been easier thanks to their intuitive platform, which guides you through the process
                                step-by-step. From formatting to content optimization, TaskMaster ensures that your
                                resume showcases your skills and experiences in the best possible light, helping you
                                stand out in today's competitive job market.</p>
                        </div>
                        <div class="m-5 py-5 px-3 bg-test">
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="photo/testimonial-student-4.jpg" class="d-block w-100" alt="...">
                            </div>
                            <p style="font-size: 24px; color: #96055e;">Abrham .Y</p>
                            <p>Overall, I can't recommend TaskMaster Assignment Helper and CV Maker highly enough. Their
                                professionalism, expertise, and dedication to customer satisfaction make them an
                                invaluable resource for anyone seeking academic or professional assistance. Thank you,
                                TaskMaster, for making my life easier and helping me achieve my goals!</p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item testimonial-img active w-100">
                    <div class="d-flex justify-content-center align-items-center w-100">
                        <div class="m-5 py-5 px-3 bg-test">
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="photo/testimonial-student-5.jpg" class="d-block w-100" alt="...">
                            </div>
                            <p style="font-size: 24px; color: #96055e;">Henok .A</p>
                            <p>TaskMaster Assignment Helper and CV Maker is a true lifesaver! As a student striving for
                                academic excellence while also navigating the complexities of job hunting, I was in
                                desperate need of a reliable solution to help me manage my workload and enhance my
                                professional profile. TaskMaster proved to be the perfect solution.</p>
                        </div>
                        <div class="m-5 py-5 px-3 bg-test">
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="photo/testimonial-student-6.jpg" class="d-block w-100" alt="...">
                            </div>
                            <p style="font-size: 24px; color: #96055e;">Dagim .K</p>
                            <p>Their assignment help service is a godsend. With a team of skilled experts covering a
                                wide range of subjects and topics, TaskMaster consistently delivers top-notch academic
                                work that exceeds expectations. From essays to dissertations, they tackle each task with
                                precision and expertise, ensuring that I always receive high grades and positive
                                feedback from my professors.</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <!-- Content for the fourth testimonial -->
                    </div>
                    <div class="col-lg-4 d-none d-lg-block">
                        <!-- Content for the fifth testimonial -->
                    </div>
                    <div class="col-lg-4 d-none d-lg-block">
                        <!-- Content for the sixth testimonial -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Add more carousel items for additional testimonials -->
    </div>
    <!-- Inner -->

    <!-- Previous & Next buttons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
    </div>
    <!-- Carousel wrapper -->

    <!--************************************************** End of testimonials *********************************** -->

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-body-tertiary text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <img src="photo/logo.gif" width="50px" style="border-radius: 50%;" alt="">Taskmaster
                        </h6>
                        <p class="text-center">
                            "<span class="text-primary">TaskMaster</span>: Elevating your tasks, empowering your
                            success."
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Service
                        </h6>
                        <p>
                            <a href="pages/askQuestion.html" class="text-reset">Ask Question</a>
                        </p>
                        <p>
                            <a href="pages/cvTemplate.html" class="text-reset">CV Maker</a>
                        </p>
                        <p>
                            <a href="pages/resource.html" class="text-reset">Resource</a>
                        </p>
                        <p>
                            <a href="pages/faq.html" class="text-reset">FAQ</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="index.html" class="text-reset">Home</a>
                        </p>
                        <p>
                            <a href="pages/aboutUs.html" class="text-reset">About Us</a>
                        </p>
                        <p>
                            <a href="pages/experts.html" class="text-reset">Experts</a>
                        </p>
                        <p>
                            <a href="pages/help.html" class="text-reset">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i> ADDIS ABABA, ETHIOPIA</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            info@taskmaster.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 251 11 777 55 55</p>
                        <p><i class="fas fa-print me-3"></i> + 251 11 555 77 77</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2024 Copyright:
            <a class="text-reset fw-bold" href="index.html">Taskmaster</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
    // JavaScript to add/remove scrolling class
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 0) {
            navbar.classList.remove('navbar-transparent');
            navbar.classList.add('navbar-scrolled');
        } else {
            navbar.classList.remove('navbar-scrolled');
            navbar.classList.add('navbar-transparent');
        }
    });

    function scrollDown() {
        window.scrollBy({
            top: window.innerHeight,
            behavior: 'smooth'
        });
    }

    function scrollUp() {
        window.scrollBy({
            top: -window.innerHeight,
            behavior: 'smooth'
        });
    }
    </script>

    <!-- testimonial -->
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Font awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.1/js/v4-shims.js"></script>
    <script>
    var swiper = new Swiper('.swiper', {
        slidesPerView: 3,
        direction: getDirection(),
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        on: {
            resize: function() {
                swiper.changeDirection(getDirection());
            },
        },
    });

    function getDirection() {
        var windowWidth = window.innerWidth;
        var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';

        return direction;
    }
    </script>
</body>

</html>