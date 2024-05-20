<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taskmaster | Student Account</title>
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
                        <li class="sidebar-item some">
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
                <h3 class="fw-bold fs-4 mb-3 mt-3">Student Account</h3>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ms-auto">
                    <?php
                        if(isset($_SESSION['msg']))
                        {
                            echo '
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../account.png" style="width: 40px; border-radius: 50%; border: 2px solid #b41af1;" alt="">
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../../php/logout.php">Logout</a></li>
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
                                            Total Registered Student
                                        </h5>
                                        <p class="mb-2 fw-bold">
                                        <?php
                                                include '../../php/connection.php';

                                                $sql = "SELECT COUNT(*) AS allStudent FROM studentaccount";
                                                $teach = mysqli_query($conn, $sql);
                                                $rowteach = mysqli_fetch_assoc($teach);

                                                $count_teach = $rowteach['allStudent'];
                                                echo $count_teach;
                                            ?>
                                        </p>
                                        <div class="mb-0">
                                            <span class="badge text-success me-2">
                                                +9.0%
                                            </span>
                                            <span class="fw-bold">
                                                Since Last Month
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid mt-5">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-md-12 d-flex justify-content-center align-items-center str">
                                    <canvas id="myChart" width="100px" height="100px"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-dark table-hover">
                        <thead>
                          <tr>
                            <th scope="col">Profile</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Email Address</th>
                            <th scope="col">Education</th>
                            <th scope="col">Department</th>
                            <th scope="col">registration Date</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <?php
                                $sql = "SELECT * FROM studentaccount";
                                $result = $conn -> query($sql);
                                $i = 1;
                                if($result -> num_rows > 0) {
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo '
                                        <tr>
                                    <th scope="row">'.$i.'</th>
                                    <td>'.$row['FName'].'</td>
                                    <td>'.$row['LName'].'</td>
                                    <td>'.$row['emailAdd'].'</td>
                                    <td>'.$row['levelEdu'].'</td>
                                    <td>'.$row['department'].'</td>
                                    <td>'.$row['registration_date'].'</td>
                                    </tr>
                                    ';
                                    }

                                }
                            ?>
                          </tr>
                        </tbody>
                      </table>
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
    <!-- Chart Script -->
    <script>
        <?php
        include '../../php/connection.php';

        $sql = "SELECT DATE(registration_date) AS registered_date, COUNT(*) AS daily_users FROM studentaccount WHERE YEAR(registration_date) = YEAR(CURDATE()) GROUP BY registered_date";
        $result = $conn->query($sql);

        $daily_users = [];
        $labels = [];
        $user_data = [];

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $daily_users[$row['registered_date']] = $row['daily_users'];
                $labels[] = $row['registered_date']; // Assuming date format works for chart labels
                $user_data[] = $daily_users[$row['registered_date']];
            }
        } else {
            echo "No data found";
        }

        
        $conn->close();
    ?>

        // Define chart data
        const data = {
          labels: <?php echo json_encode($labels); ?>,
          datasets: [{
            label: 'Registered Students',
            backgroundColor: 'rgba(54, 162, 235, 0.2)', // Light blue
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 2,
            data: <?php echo json_encode($user_data); ?>,
          },
          
        ]
        };
    
        // Define options
        const options = {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          }
        };
    
        // Create chart
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
          type: 'line',
          data: data,
          options: options
        });
      </script>
</body>

</html>