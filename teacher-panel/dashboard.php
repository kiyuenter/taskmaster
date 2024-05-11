<?php
    include '../php/connection.php';

    $sql = "SELECT DATE(registration_date) AS registration_date, COUNT(*) AS registrations
        FROM teacheraccount
        GROUP BY DATE(registration_date)
        ORDER BY registration_date ASC";

        $result = $conn->query($sql);

        // Prepare data for the chart (consider error handling)
        $data = array();
        $data[] = array('Date', 'Registrations');
        if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = array(date('Y-m-d', strtotime($row['registration_date'])), (int) $row['registrations']);
        }
        } else {
        // Handle the case of no registrations
        $data[] = array('No registrations found', 0);
        }

        // Close connection
        $conn->close();

        // Encode data as JSON for JavaScript (consider security for real applications)
        $data_json = json_encode($data);
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/dashboard.css" />
    <title>Taskmaster | Teacher Dashboard</title>

    <!-- Pie Chart for data visualization -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Total Question',     4920],
          ['Solved',      720],
          ['Unsolved',  4200],
          ['You Answered', 200],
        ]);

        var options = {
          title: 'Web question activities with chart',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>

    <!-- Line chart to view registered teachers -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
  // Access the encoded data from PHP using JavaScript
  var data = <?= $data_json ?>;

  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

    var options = {
      title: 'Daily Registered Users',
      curveType: 'function',
      legend: { position: 'bottom' }
    };

    chart.draw(google.visualization.arrayToDataTable(data), options);
  }
</script>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                <img src="../photo/logo.png" class="pe-2" style="border-radius: 50%; width: 50px;" alt="">TASKMASTER</div>
            <div class="list-group list-group-flush my-3">
                <a href="dashboard.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="askedQuestion.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-hand-paper me-2"></i>Asked Questions</a>
                <a href="analytics.php"
                 class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Analytics</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paint-brush me-2"></i>CV Maker</a>
                <a href="resource.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paperclip me-2"></i>Resource</a>
                <a href="feedback.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-comment me-2"></i>Feedback</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../photo/teacher-type/computer-science-tutor.jpg" style="width: 40px; border-radius: 50%; border: 2px solid #b41af1;" alt=""> John Doe
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3 q-hv">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <?php
                                include '../php/connection.php';
                                    $sql = ("SELECT * FROM askedquestions");
                                    $result = mysqli_query($conn, $sql);
                                    $row_count = mysqli_num_rows($result);
                                ?>
                                <h3 class="fs-2"><?php echo $row_count ?></h3>
                                <p class="fs-5">Total Questions</p>
                            </div>
                            <i class="fas fa-question-circle fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <?php
                                    include '../php/connection.php';
                                    $sql_solved = "SELECT COUNT(*) AS solved_count FROM askedquestions WHERE statuss = 'solved'"; // Replace 'status' and 'solved' with your actual column and value
                                    $result_solved = mysqli_query($conn, $sql_solved);
                                    $row_solved = mysqli_fetch_assoc($result_solved);
                                    $solved_count = $row_solved['solved_count'];
                                ?>
                                <h3 class="fs-2"><?php echo $solved_count ?></h3>
                                <p class="fs-5">Solved</p>
                            </div>
                            
                            <i class="fas fa-pencil fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                            <?php
                                    include '../php/connection.php';
                                    $sql_unsolved = "SELECT COUNT(*) AS unsolved_count FROM askedquestions WHERE statuss = 'unsolved'"; // Replace 'status' and 'solved' with your actual column and value
                                    $result_unsolved = mysqli_query($conn, $sql_unsolved);
                                    $row_solved = mysqli_fetch_assoc($result_unsolved);
                                    $unsolved_count = $row_solved['unsolved_count'];
                                ?>
                                <h3 class="fs-2"><?php echo $unsolved_count ?></h3>
                                <p class="fs-5">Unsolved</p>
                            </div>
                            <i class="fas fa-exclamation-circle fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">%25</h3>
                                <p class="fs-5">You answered</p>
                            </div>
                            <i class="fas fa-thumbs-up fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Activities</h3>
                    <div class="row w-100 d-flex align-items-center justify-content-center">
                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                            <div id="donutchart" style="width: 500px; height: 250px;"></div>
                        </div>
                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                            <div id="curve_chart" style="width: 500px; height: 250px"></div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>