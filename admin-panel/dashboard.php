<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taskmaster | Admin Dashboard</title>
    <link rel="icon" href="../photo/logo.png">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <img src="../photo/logo.png" style="height: 30px; border-radius: 50%;" alt="">
                </button>
                <div class="sidebar-logo">
                    <a href="#">Taskmaster</a>
                </div>
            </div>
            <ul class="sidebar-nav">
            <li class="sidebar-item">
                <li class="sidebar-item some">
                    <a href="dashboard.php" class="sidebar-link">
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
                    <ul id="usermanagement" class="sidebar-dropdown list-unstyled collapse ms-4" data-bs-parent="#usermanagement">
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
                            <a href="pages/student_account.php" class="sidebar-link ms-2">Student Account</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed has-dropdown ms-2" data-bs-toggle="collapse"
                                data-bs-target="#teacheraccount" aria-expanded="false" aria-controls="teacheraccount">Teacher Account</a>
                            <ul id="teacheraccount" class="ms-4 sidebar-dropdown list-unstyled collapse" data-bs-parent="#teacheraccount">
                                <li class="sidebar-item">
                                    <a href="pages/teacher_pages/new_registrations.php" class="sidebar-link">New Registrations</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages/teacher_pages/existing_accounts.php" class="sidebar-link">Existing Accounts</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages/teacher_pages/student_feedback.php" class="sidebar-link">Student Feedback</a>
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
                                    <a href="pages/evaluations_pages/questions.php" class="sidebar-link ms-2">Evaluation Questions</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages/evaluations_pages/teachers_answers.php" class="sidebar-link ms-2">Teachers Answer</a>
                                </li>
                            </ul>
                    </a>
                </li>
                <!-- Assignment -->
                <li class="sidebar-item">
                    <a href="pages/assignment.php" class="sidebar-link">
                        <i class="lni lni-pencil-alt"></i>
                        <span>Asked Questions</span>
                    </a>
                </li>
            <!-- Resource -->
                <li class="sidebar-item">
                    <a href="pages/resource.php" class="sidebar-link">
                        <i class="lni lni-upload"></i>
                        <span>Resource</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="pages/notification.php" class="sidebar-link">
                        <i class="lni lni-alarm"></i>
                        <span>Notification</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="pages/report.php" class="sidebar-link">
                        <i class="lni lni-files"></i>
                        <span>Report</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="../php/logout.php" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-4 py-2">
                <h3 class="fw-bold fs-4 mb-3 mt-3">Admin Dashboard</h3>
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
                            <div class="col-12 col-md-4">
                                <div class="card border-0 info">
                                    <div class="card-body py-4">
                                        <h5 class="mb-2 fw-bold">
                                            Total Registered Teacher
                                        </h5>
                                        <p class="mb-2 fw-bold">
                                            <?php
                                                include '../php/connection.php';

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
                            <div class="col-12 col-md-4 ">
                                <div class="card  border-0 info">
                                    <div class="card-body py-4">
                                        <h5 class="mb-2 fw-bold">
                                            Total Registered Student
                                        </h5>
                                        <p class="mb-2 fw-bold">
                                        <?php
                                                include '../php/connection.php';

                                                $sql = "SELECT COUNT(*) AS allStudent FROM studentaccount";
                                                $teach = mysqli_query($conn, $sql);
                                                $rowteach = mysqli_fetch_assoc($teach);

                                                $count_teach = $rowteach['allStudent'];
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
                                            Total Asked Questions
                                        </h5>
                                        <p class="mb-2 fw-bold">
                                        <?php
                                                include '../php/connection.php';

                                                $sql = "SELECT COUNT(*) AS allAsked FROM askedquestions";
                                                $teach = mysqli_query($conn, $sql);
                                                $rowteach = mysqli_fetch_assoc($teach);

                                                $count_teach = $rowteach['allAsked'];
                                                echo $count_teach;
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid mt-5">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-md-6 str d-flex justify-content-center align-items-center">
                                    <canvas id="myChart" width="100px" height="100px"></canvas>
                                </div>
                                <div class="col-md-6 str d-flex justify-content-center align-items-center">
                                    <canvas id="myPieChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="footer">
                <?php
                    include "pages/footer.php";
                ?>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <!-- Chart Script -->
    <script>
        <?php
        include '../php/connection.php';

        $sql = "SELECT DATE(registration_date) AS registered_date, COUNT(*) AS daily_users FROM teacheraccount WHERE YEAR(registration_date) = YEAR(CURDATE()) GROUP BY registered_date";
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

        $sql_students = "SELECT DATE(registration_date) AS registered_date, COUNT(*) AS student_count FROM studentaccount WHERE YEAR(registration_date) = YEAR(CURDATE()) GROUP BY registered_date";
        $result_students = $conn->query($sql_students);

        $student_data = []; // Array to store student registration counts

        if ($result_students->num_rows > 0) {
            while($row = $result_students->fetch_assoc()) {
                $student_data[$row['registered_date']] = $row['student_count'];
            }
        } else {
            echo "No student data found";
        }
        $conn->close();
    ?>

        // Define chart data
        const data = {
          labels: <?php echo json_encode($labels); ?>,
          datasets: [{
            label: 'Teacher Registered',
            backgroundColor: 'rgba(54, 162, 235, 0.2)', // Light blue
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 2,
            tension: 0.5,
            data: <?php echo json_encode($user_data); ?>,
          },
          {
          label: 'Student Registered', // Change label as needed
          backgroundColor: 'rgba(255, 99, 132, 0.2)', // Light red
          borderColor: 'rgba(255, 99, 132, 1)',
          borderWidth: 2,
          tension: 0.5,
          data: <?php echo json_encode($student_data); ?>,
        }
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

      <!-- Create script for pie chart -->
      <?php
            // Include connection details and database operations from a separate file
            include '../php/connection.php';

            $sql_solved = "SELECT COUNT(*) AS solved_count FROM askedquestions WHERE statuss = 'solved'";
            $result_solved = mysqli_query($conn, $sql_solved);
            $row_solved = mysqli_fetch_assoc($result_solved);
            $solved_count = $row_solved['solved_count'];

            $sql_unsolved = "SELECT COUNT(*) AS unsolved_count FROM askedquestions WHERE statuss = 'unsolved'";
            $result_unsolved = mysqli_query($conn, $sql_unsolved);
            $row_unsolved = mysqli_fetch_assoc($result_unsolved);
            $unsolved_count = $row_unsolved['unsolved_count'];


            ?>
      <script>
        // Define chart data based on fetched counts
        const kidus = {
          labels: ['Solved', 'Unsolved'],
          datasets: [{
            label: 'Questions Status',
            data: [<?php echo $solved_count; ?>, <?php echo $unsolved_count; ?>], // Use fetched counts
            backgroundColor: [
              'rgba(54, 162, 235, 0.5)', // Light blue (solved)
              'rgba(255, 99, 132, 0.5)', // Light red (unsolved)
            ],
            hoverOffset: 4 // Distance between hovered point and chart
          }]
        };

        // Create the pie chart
        var ctxt = document.getElementById('myPieChart').getContext('2d');
        var myPieChart = new Chart(ctxt, {
          type: 'pie',
          data: kidus,
          options: {
            plugins: {
              legend: {
                position: 'bottom' // Change the position of the legend
              },
              title: {
                display: true,
                text: 'Questions Status'
              }
            }
          }
        });
      </script>
</body>

</html>