<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taskmaster | Admin Account</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="icon" href="../../photo/logo.png">
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
                <li class="sidebar-item some">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#usermanagement" aria-expanded="false" aria-controls="usermanagement">
                        <i class="lni lni-user"></i>
                        <span>User Management</span>
                    </a>
                </li>
                    <ul id="usermanagement" class="sidebar-dropdown list-unstyled collapse ms-4" data-bs-parent="#sidebar">
                        <?php
                        $realAdmin = 'kidusseleshi19@gmail.com';
                        if($_SESSION['emailA'] == $realAdmin){
                        echo '
                        <li class="sidebar-item some"> 
                            <a href="pages/admin_account.php" class="sidebar-link ms-2">Admin Account</a>
                        </li>';
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
                <li class="sidebar-item">
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
                <h3 class="fw-bold fs-4 mb-3 mt-3">Admin Account</h3>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <?php
                        if (isset($_SESSION['username'])) {
                            echo '
                                <li class="nav-item dropdown me-5" style="margin-right: 100px !important;">
                                <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../account.png" style="width: 40px; border-radius: 50%; border: 2px solid #b41af1;" alt="">
                                </a>
                                <ul class="dropdown-menu me-5 p-2" aria-labelledby="navbarDropdown">
                                    <li><p>Welcome back<br>' . $_SESSION['username'] . '</p>
                                    <li><a class="dropdown-item bg-warning rounded text-center" href="../../../php/logout.php">Logout</a></li>
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
                            <div class="col-md-12">
                                <div class="card  border-0 info">
                                    <div class="card-body py-4">
                                        <h5 class="mb-2 fw-bold">
                                            Total Admin's
                                        </h5>
                                        <p class="mb-2 fw-bold">
                                        <?php
                                                include '../../php/connection.php';

                                                $sql = "SELECT COUNT(*) AS adminacc FROM admin_account";
                                                $teach = mysqli_query($conn, $sql);
                                                $rowteach = mysqli_fetch_assoc($teach);

                                                $count_teach = $rowteach['adminacc'];
                                                echo $count_teach;
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid d-flex justify-content-center align-items-center">
                            <div class="container w-50 m-5">
                                <?php
                                        if(isset($_SESSION['msg']))
                                        {
                                            echo '<div class="alert alert-danger text-center" role="alert">';
                                            echo $_SESSION['msg'];
                                            echo '</div>';
                                            unset($_SESSION['msg']);
                                        }
                                ?>
                                <?php
                                    if(isset($_SESSION['registerd']))
                                    {
                                        echo "<script>alert('";
                                        echo $_SESSION['registerd'];
                                        echo "')</script>";
                                        unset($_SESSION['registerd']);
                                    }
                                ?>
                                <h2>Create Admin Account</h2>
                                <form method="post" action="../../php/create_admin.php" onsubmit="return validatePassword()">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username:</label>
                                    <input type="text" name="username" id="username" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address:</label>
                                    <input type="email" name="email" id="email" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password:</label>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Create Account</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <table class="table table-dark table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email Address</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
                        <tbody>

                    <?php
                    include '../../php/connection.php';
                    $sql = "SELECT * FROM admin_account";
                    $result = $conn -> query($sql);
                    $i = 1;
                    if($result -> num_rows > 0)
                    {
                        while($row = $result->fetch_assoc()){

                            echo '
                          <tr>
                            <th scope="row">'.$i.'</th>
                            <td>'.$row["username"].'</td>
                            <td>'.$row["email"].'</td>
                            <td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal'.$i.'"><i class="lni lni-pencil"></i></button></td>
                            <td>
                                <form action="../../php/delete_admin.php" method="POST">
                                    <input name="email" type="hidden" value="'.$row["email"].'">
                                    <button class="btn btn-danger m-2 mb-4"><i class="lni lni-trash-can"></i></button>
                                </form>
                            </td>
                          </tr>
                          '.$i++.'
                        
                      ';
                        }
                    }
                      ?>
                      </tbody>
                      </table>
                </div>
                <?php
                if(isset($_SESSION["update"]) && $_SESSION["update"] == TRUE) {
                    echo '
                        <script>alert("'.$_SESSION["update"].'")</script>;
                    ';

                    unset($_SESSION["update"]);
                }
                ?>
                <?php
                if(isset($_SESSION["msgs"]) && $_SESSION["msgs"] == TRUE) {
                    echo '
                        <script>alert("'.$_SESSION["msgs"].'")</script>;
                    ';

                    unset($_SESSION["msgs"]);
                }
                ?>

                <?php
            include '../../php/connection.php';
            $sql = "SELECT * FROM admin_account";
            $result = $conn->query($sql);
            $i = 1;
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '
                    <div class="modal fade" id="myModal'.$i.'" tabindex="-1" aria-labelledby="myModalLabel'.$i.'" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myModalLabel'.$i.'">Edit Admin Account '.$i.'</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="../../php/editAdmin.php" method="POST">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="username'.$i.'" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="username'.$i.'" name="username" value="'.$row["username"].'">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email'.$i.'" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email'.$i.'" value="'.$row["email"].'" disabled>
                                            <input type="hidden" class="form-control" id="email'.$i.'" value="'.$row["email"].'" name="email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="password'.$i.'" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password'.$i.'" name="password" value="'.$row["APassword"].'">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>';
                    $i++;
                }
            } else {
                echo '<p>No admin accounts found.</p>';
            }
        ?>
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
    <script src="../../js/validation.js"></script>
</body>

</html>