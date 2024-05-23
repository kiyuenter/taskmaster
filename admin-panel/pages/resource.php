<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taskmaster | Resource</title>
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
                <li class="sidebar-item">
                    <a href="assignment.php" class="sidebar-link">
                        <i class="lni lni-pencil-alt"></i>
                        <span>Asked Questions</span>
                    </a>
                </li>
            <!-- Resource -->
                <li class="sidebar-item some">
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
                <h3 class="fw-bold fs-4 mb-3 mt-3">Resource</h3>
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
                            <div class="col-12 col-md-12">
                                <div class="card border-0 info">
                                    <div class="card-body py-4">
                                        <h5 class="mb-2 fw-bold">
                                            All uploaded resources
                                        </h5>
                                        <p class="mb-2 fw-bold">
                                        <?php
                                                include '../../php/connection.php';

                                                $sql = "SELECT COUNT(*) AS allQue FROM resources";
                                                $teach = mysqli_query($conn, $sql);
                                                $rowteach = mysqli_fetch_assoc($teach);

                                                $count_teach = $rowteach['allQue'];
                                                echo $count_teach;
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid mt-5">
                            <div class="container mt-3">
                                <div class="form-container">
                                <?php
                                    if (isset($_SESSION['msg'])) {
                                        echo '
                                            <div class="alert alert-danger" role="alert">
                                                <p class="">'.htmlspecialchars($_SESSION["msg"]).'</p>
                                            </div>
                                        ';
                                        unset($_SESSION['msg']);
                                    }
                                ?>
                                  <h1>Resource Uploader</h1>
                                  <form action="../receive-upload-resource.php" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                      <label for="coverImage" class="form-label">Cover Image</label><br>
                                      <input class="form-control" type="file" id="coverImage" name="coverImage" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="resourceFile" class="form-label">Resource File</label><br>
                                        <input class="form-control" type="file" id="resourceFile" name="resourceFile" required>
                                      </div>          
                                    <div class="mb-3">
                                      <label for="title" class="form-label">Title</label>
                                      <input type="text" class="form-control" id="title" name="title" required>
                                    </div>
                                    <div class="mb-3">
                                      <label for="description" class="form-label">Description</label>
                                      <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                      <label for="category" class="form-label">Category</label>
                                      <select id="myDropdown" class="form-select" id="category" name="category" required>
                                        <option value="">Select Department</option>
                                        <option value="accounting and finance">Accounting and Finance</option>
                                        <option value="Management">Management</option>
                                        <option value="Computer Science">Computer Science</option>
                                        <option value="Software Engineering">Software Engineering</option>
                                        <option value="Sport">Sport</option>
                                        <option value="Medecine">Medecine</option>
                                        <option value="Engineering">Engineering</option>
                                        <option value="other">Other</option>
                                      </select>
                                      <input type="text" id="otherInput" class="form-control mt-2" disabled>
                                    </div>
                                    <div class="mb-3">
                                      <label for="pageCount" class="form-label">Page Count (if applicable)</label>
                                      <input type="number" class="form-control" id="pageCount" name="pageCount">
                                    </div>
                                    <button type="submit" class="btn btn-primary"><i class="lni lni-upload me-2"></i>Upload Resource</button>
                                  </form>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <!-- resource list -->
              <div class="container">
                <div class="row">
                        <?php
                            include "../../php/connection.php";
                            $sql = "SELECT * FROM resources";
                            $result = $conn -> query($sql);
                            if ($result -> num_rows > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo '
                                    <div class="col-md-4">
                                    <div class="card mt-5 m-4" style="width: 18rem; border-radius: 20px;">            
                            <img src="../'.$row["coverimg"].'" style="border-radius: 20px; height: 420px;" class="card-img-top" alt="'.$row["title"].'">
                            <div class="card-body">
                            <h5 class="card-title">'.$row["title"].'</h5>
                            <p class="card-text">'.$row["descr"].'</p>
                            </div>
                            <ul class="list-group list-group-flush">

                            <li class="list-group-item">'.$row["category"].'</li>
                            <li class="list-group-item">'.$row["page_count"].'</li>
                            <li class="list-group-item" style="display: none;">'.$row["registration_date"].'</li>
                            </ul>
                            <div class="card-body justify-content-center align-items-center d-flex">
                                <p><a id="download-link" href="../'.$row["resourcefile"].'" data-file-path="" class="btn btn-primary m-2"><i class="lni lni-download"></i></a></p>
                                <p><a id="download-link" href="#" data-file-path="'.$row["resourcefile"].'" class="btn btn-danger m-2"><i class="lni lni-trash-can"></i></a></p>
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
    <script src="../script.js"></script>


    <!-- To enable input -->
    <script>
        const dropdown = document.getElementById("myDropdown");

        dropdown.addEventListener("change", function() {
        const selectedOption = this.value;
        const otherInput = document.getElementById("otherInput");

        if (selectedOption === "other") {
            otherInput.disabled = false;
        } else {
            otherInput.disabled = true;
        }
        });
    </script>
    
</body>

</html>