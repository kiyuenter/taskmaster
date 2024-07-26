<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taskmaster | New Teachers</title>
    <link rel="icon" href="../../../photo/logo.png">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <img src="../../../photo/logo.png" style="height: 30px; border-radius: 50%;" alt="">
                </button>
                <div class="sidebar-logo">
                    <a href="#">Taskmaster</a>
                </div>
            </div>
            <ul class="sidebar-nav">
            <li class="sidebar-item">
                <li class="sidebar-item">
                    <a href="../../dashboard.php" class="sidebar-link">
                        <i class="lni lni-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item some">
               <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                    data-bs-target="#usermanagement" aria-expanded="false" aria-controls="usermanagement">
                    <i class="lni lni-user"></i>
                    <span>User Management</span>
                </a>
                </li>
                    <ul id="usermanagement" class="sidebar-dropdown list-unstyled collapse ms-4" data-bs-parent="#sidebar">
                        <?php
                            if (isset($_SESSION['emailA']) && $_SESSION['emailA'] == "kidusseleshi19@gmail.com") {
                                echo '
                                  <li class="sidebar-item"> 
                                    <a href="../admin_account.php" class="sidebar-link ms-2">Admin Account</a>
                                  </li>
                                ';
                              }
                           ?>
                        <li class="sidebar-item">
                            <a href="../student_account.php" class="sidebar-link ms-2">Student Account</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed has-dropdown ms-2 some" data-bs-toggle="collapse"
                                data-bs-target="#teacheraccount" aria-expanded="false" aria-controls="teacheraccount">Teacher Account</a>
                            <ul id="teacheraccount" class="ms-4 sidebar-dropdown list-unstyled collapse" data-bs-parent="#usermanagement">
                                <li class="sidebar-item some">
                                    <a href="new_registrations.php" class="sidebar-link">New Registrations</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="existing_accounts.php" class="sidebar-link">Existing Accounts</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="student_feedback.php" class="sidebar-link">Student Feedback</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
<!-- Evaluation -->
                <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                                data-bs-target="#evaluation" aria-expanded="false" aria-controls="evaluation">
                                <i class="lni lni-flag"></i>
                                <span>Evaluation</span>
                            </a>
                                <ul id="evaluation" class="sidebar-dropdown list-unstyled collapse ms-4" data-bs-parent="#evaluation">
                                <li class="sidebar-item">
                                    <a href="../evaluations_pages/questions.php" class="sidebar-link ms-2">Evaluation Questions</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../evaluations_pages/teachers_answers.php" class="sidebar-link ms-2">Teachers Answer</a>
                                </li>
                            </ul>
                    </a>
                </li>
                <!-- Assignment -->
                <li class="sidebar-item">
                    <a href="../assignment.php" class="sidebar-link">
                        <i class="lni lni-pencil-alt"></i>
                        <span>Asked Questions</span>
                    </a>
                </li>
            <!-- Resource -->
                <li class="sidebar-item">
                    <a href="../resource.php" class="sidebar-link">
                        <i class="lni lni-upload"></i>
                        <span>Resource</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="../notification.php" class="sidebar-link">
                        <i class="lni lni-alarm"></i>
                        <span>Notification</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="../report.php" class="sidebar-link">
                        <i class="lni lni-files"></i>
                        <span>Report</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="../../../php/logout.php" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-4 py-2">
                <h3 class="fw-bold fs-4 mb-3 mt-3">New Teachers</h3>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ms-auto">
                    <?php
                        if(isset($_SESSION['username']))
                        {
                            echo '
                                <li class="nav-item dropdown me-5" style="margin-right: 100px !important;">
                                <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="account.png" style="width: 40px; border-radius: 50%; border: 2px solid #b41af1;" alt="">
                                </a>
                                <ul class="dropdown-menu me-5 p-2" aria-labelledby="navbarDropdown">
                                    <li><p>Welcome back<br>'.$_SESSION['username'].'</p>
                                    <li><a class="dropdown-item bg-warning rounded text-center" href="../php/logout.php">Logout</a></li>
                                </ul>
                                </li>
                            ';
                        }
                    ?>
                    </ul>
                </div>
            </nav>
            <main class="content px-3 py-4">
                <div class="container-fluid">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="card border-0 info">
                                    <div class="card-body py-4">
                                        <h5 class="mb-2 fw-bold">
                                            Total Registered Teacher
                                        </h5>
                                        <p class="mb-2 fw-bold">
                                        <?php
                                                include '../../../php/connection.php';

                                                $sql = "SELECT COUNT(*) AS allTeachers FROM teacheraccount";
                                                $teach = mysqli_query($conn, $sql);
                                                $rowteach = mysqli_fetch_assoc($teach);

                                                $count_teach = $rowteach['allTeachers'];
                                                echo $count_teach;
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 ">
                                <div class="card  border-0 info">
                                    <div class="card-body py-4">
                                        <h5 class="mb-2 fw-bold">
                                            Not Accepted Teachers
                                        </h5>
                                        <p class="mb-2 fw-bold">
                                        <?php
                                                include '../../../php/connection.php';

                                                $sql = "SELECT COUNT(*) AS allTeachers FROM teacheraccount WHERE statusActivity = 'Disable' ";
                                                $teach = mysqli_query($conn, $sql);
                                                $rowteach = mysqli_fetch_assoc($teach);

                                                $count_teach = $rowteach['allTeachers'];
                                                echo $count_teach;
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-dark rounded m-5" style="height: 50px;"></div>
                          <div class="container-fluid">
                            <div class="row">
                                <?php
                                include '../../../php/connection.php';
                                $sql = "SELECT * FROM teacheraccount WHERE statusActivity = 'Disable'";
                                $result = $conn -> query($sql);

                                if($result -> num_rows > 0)
                                {
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo '
                                            <div class="col-md-4 mt-2">
                                                <div class="card" style="width: 24rem;">
                                                    <div class="d-flex justify-content-center align-items-center m-4">
                                                        <img style="border-radius: 50%; width: 150px; object-fit: fill;" src="../../../teacherfiles/'.$row["profilePicture"].'" class="card-img-top" alt="profile">
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">Full Name:&nbsp'.$row["FName"].'&nbsp'.$row["LName"].'</h5>
                                                        <p class="card-text">Gender:&nbsp'.$row["Gender"].'</p>
                                                        <p class="card-text">DOB:&nbsp'.$row["dob"].'</p>
                                                        <p class="card-text">Country:&nbsp'.$row["country"].'</p>
                                                        <p class="card-text">Education Level:&nbsp'.$row["eduLevel"].'</p>
                                                        <p class="card-text">Department:&nbsp'.$row["department"].'</p>
                                                        <p class="card-text">Academic:&nbsp'.$row["academic"].'</p>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                        <p class="card-text">Educational Document</p>
                                                        <p><a id="download-link" href="../../../teacherfiles/'.$row["EdPath"].'" data-file-path="" class="btn btn-success m-2">Download</a></p>
                                                        </div>
                                                        <div class="d-flex justify-content-between mt-2 align-items-center">
                                                        <p class="card-text">CV Document</p>
                                                        <p><a id="download-link" href="../../../teacherfiles/'.$row["CvPath"].'" data-file-path="" class="btn btn-success m-2">Download</a></p>
                                                        </div>
                                                        <p class="card-text">Registration Date:&nbsp'.$row["registration_date"].'</p>
                                                        <div>
                                                            <h5 class="card-title text-center"><u><b>Status</b></u></h5>
                                                            <div class="alert alert-danger" role="alert">
                                                                <p class="text-center" style="font-size: 12px !important;">Before click the buttons please make sure the document iis perfectly checked!</p>
                                                            </div>
                                                            <p></p>
                                                        </div>
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <form action="../../../php/teacherstatus.php" method="POST">
                                                                <input type="hidden" name="email" value="'.$row["emailAdd"].'">
                                                                <input class="btn btn-primary ms-3" name="accept" type="submit" value="Accept">    
                                                                <input class="btn btn-danger ms-3" name="accept" type="submit" value="Reject">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            ';
                                    }
                                }
                                ?>   
                            </div>
                          </div>
                    </div>
                </div>
            </main>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-body-secondary">
                        <div class="col-6 text-start ">
                            <a class="text-body-secondary" href=" #">
                                <strong>CodzSwod</strong>
                            </a>
                        </div>
                        <div class="col-6 text-end text-body-secondary d-none d-md-block">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a class="text-body-secondary" href="#">Contact</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-body-secondary" href="#">About Us</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-body-secondary" href="#">Terms & Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="../../script.js"></script>
    <script src="../../js/download.js"></script>
    <!-- Chart Script -->
    
</body>

</html>