<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taskmaster | Asked Questions</title>
    <link rel="icon" href="../../photo/logo.png">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="wrapper">
    <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <img src="../../photo/logo.png" style="height: 30px; border-radius: 50%;" alt="">
                </button>
                <div class="sidebar-logo">
                    <a href="#">Taskmaster</a>
                </div>
            </div>
            <ul class="sidebar-nav">
            <li class="sidebar-item">
                <li class="sidebar-item">
                    <a href="../dashboard.php" class="sidebar-link">
                        <i class="lni lni-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
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
                                    <a href="pages/admin_account.php" class="sidebar-link ms-2">Admin Account</a>
                                  </li>
                                ';
                              }
                           ?>
                        <li class="sidebar-item">
                            <a href="student_account.php" class="sidebar-link ms-2">Student Account</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed has-dropdown ms-2" data-bs-toggle="collapse"
                                data-bs-target="#teacheraccount" aria-expanded="false" aria-controls="teacheraccount">Teacher Account</a>
                            <ul id="teacheraccount" class="ms-4 sidebar-dropdown list-unstyled collapse" data-bs-parent="#usermanagement">
                                <li class="sidebar-item">
                                    <a href="teacher_pages/new_registrations.php" class="sidebar-link">New Registrations</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="teacher_pages/existing_accounts.php" class="sidebar-link">Existing Accounts</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="teacher_pages/student_feedback.php" class="sidebar-link">Student Feedback</a>
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
                                    <a href="evaluations_pages/questions.php" class="sidebar-link ms-2">Evaluation Questions</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="evaluations_pages/teachers_answers.php" class="sidebar-link ms-2">Teachers Answer</a>
                                </li>
                            </ul>
                    </a>
                </li>
                <!-- Assignment -->
                <li class="sidebar-item some">
                    <a href="assignment.php" class="sidebar-link">
                        <i class="lni lni-pencil-alt"></i>
                        <span>Asked Questions</span>
                    </a>
                </li>
            <!-- Resource -->
                <li class="sidebar-item">
                    <a href="resource.php" class="sidebar-link">
                        <i class="lni lni-upload"></i>
                        <span>Resource</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="notification.php" class="sidebar-link">
                        <i class="lni lni-alarm"></i>
                        <span>Notification</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="report.php" class="sidebar-link">
                        <i class="lni lni-files"></i>
                        <span>Report</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="../../php/logout.php" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-4 py-2">
                <h3 class="fw-bold fs-4 mb-3 mt-3">Asked Questions</h3>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ms-auto">
                    <?php
                        if(isset($_SESSION['username']))
                        {
                            echo '
                                <li class="nav-item dropdown me-5" style="margin-right: 100px !important;">
                                <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../account.png" style="width: 40px; border-radius: 50%; border: 2px solid #b41af1;" alt="">
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
                            <div class="col-12 col-md-4">
                                <div class="card border-0 info">
                                    <div class="card-body py-4">
                                        <h5 class="mb-2 fw-bold">
                                            Total Asked Questions
                                        </h5>
                                        <p class="mb-2 fw-bold">
                                        <?php
                                                include '../../php/connection.php';

                                                $sql = "SELECT COUNT(*) AS ask FROM askedquestions";
                                                $teach = mysqli_query($conn, $sql);
                                                $rowteach = mysqli_fetch_assoc($teach);

                                                $count_teach = $rowteach['ask'];
                                                echo $count_teach;
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 ">
                                <div class="card  border-0 info">
                                    <div class="card-body py-4">
                                        <h5 class="mb-2 fw-bold">
                                            Total Solved Questions
                                        </h5>
                                        <p class="mb-2 fw-bold">
                                        <?php
                                                include '../../php/connection.php';

                                                $sql = "SELECT COUNT(*) AS asolve FROM askedquestions WHERE statuss = 'solved'";
                                                $teach = mysqli_query($conn, $sql);
                                                $rowteach = mysqli_fetch_assoc($teach);

                                                $count_teach = $rowteach['asolve'];
                                                echo $count_teach;
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 ">
                                <div class="card border-0 info">
                                    <div class="card-body py-4">
                                        <h5 class="mb-2 fw-bold">
                                            Total Unsolved Questions
                                        </h5>
                                        <p class="mb-2 fw-bold">
                                        <?php
                                                include '../../php/connection.php';

                                                $sql = "SELECT COUNT(*) AS usolve FROM askedquestions WHERE statuss = 'unsolved'";
                                                $teach = mysqli_query($conn, $sql);
                                                $rowteach = mysqli_fetch_assoc($teach);

                                                $count_teach = $rowteach['usolve'];
                                                echo $count_teach;
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid mt-5 d-flex justify-content-center">
                            <div class="row">
                                <?php
                                include "../../php/connection.php";

                                $sql = "SELECT * FROM askedquestions";
                                $result = $conn -> query($sql);

                                if($result -> num_rows > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo '
                                            <div class="col-md-4 mt-2" style="width: 20rem;">
                                                <div class="card">
                                                    <div class="card-body">
                                                    <h5 class="card-title">Asker Name: '.$row["askerName"].'</h5>
                                                    <p class="card-text">Asker Email: '.$row["askerEmail"].'</p>
                                                    <p class="card-text">Subject: '.$row["subjects"].'</p>
                                                    <p class="card-text">Course: '.$row["course"].'</p>
                                                    <p class="card-text">Degree Level: '.$row["degree"].'</p>
                                                    <p class="card-text">Course code: '.$row["course_code"].'</p>
                                                    <p class="card-text">Deadline: '.$row["deadln"].'</p>
                                                    <p class="card-text">Question:</p>
                                                    <p class="card-text">'.$row["question"].'</p>
                                                    <p class="card-text">Solution</p>
                                                    <p class="card-text">'.$row["solution_answer"].'</p>
                                                    <div class="d-flex justify-content-between mt-2 align-items-center">
                                                    <p class="card-text">Attachment</p>';

                                                    if ($row["attachment"] != "") {
                                                        echo '<a class="btn btn-success" target="_blank" href="' . htmlspecialchars($row["attachment"]) . '">Download</a>';
                                                    } else {
                                                        echo '<p class="text-center">No attached file</p>';
                                                    }
                                                    echo '
                                                    </div>
                                                    <p class="card-text">Status: </p>
                                                    <div>
                                                        <div class="alert alert-danger" role="alert">
                                                            <p class="" style="font-size: 14px !important;">Solver Name: '.$row["solverUsername"].'</p>
                                                            <p class="" style="font-size: 14px !important;">Solver Email: '.$row["solverEmail"].'</p>
                                                        </div>
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
                <?php
                    include "footer.php";
                ?>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="../script.js"></script>
</body>

</html>