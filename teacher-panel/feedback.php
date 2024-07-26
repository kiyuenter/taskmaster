<?php
    session_start();
    include "../php/connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../photo/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/dashboard.css" />
    <title>Taskmaster | Feedback</title>

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
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Register Teachers'],
          ['2004',  1000],
          ['2005',  1170],
          ['2006',  660],
          ['2007',  1030]
        ]);

        var options = {
          title: 'Yearly registered teachers with graph',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
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
                <a href="dashboard.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="askedQuestion.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-hand-paper me-2"></i>Asked Questions</a>
                <a href="cvTemplate.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paint-brush me-2"></i>CV Maker</a>
                <a href="resource.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paperclip me-2"></i>Resource</a>
                <a href="feedback.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-comment me-2"></i>Feedback</a>
                <a href="../php/logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Feedback</h2>
                </div>
                <?php
                    include "include/navigation.php";
                ?>

            <div class="container-fluid px-4">
                <div class="container">
                    <div class="row">
                        <?php
                            include "../php/connection.php";
                            $email = $_SESSION['emailA'];
                            $feed = "";
                            $sql = "SELECT * FROM askedquestions WHERE solverEmail = '$email' AND studentFeedback != '$feed'";
                            $result = $conn -> query($sql);

                            if($result-> num_rows > 0) {
                                while($row = $result -> fetch_assoc()) {
                                    echo '
                                        <div class="col-md-4">
                                            <div class="card mt-5 m-4" style="width: 18rem; border-radius: 20px;">
                                                <img src="../photo/feedbacker-photo.webp" style="border-radius: 20px; height: 300px;" class="card-img-top" alt="'.$row["askerName"].'">
                                                <div class="card-body">
                                                    <h5 class="card-title">'.$row["askerName"].'</h5>
                                                    <h6><p class="card-text">Feedback</p></h6>
                                                    <p class="card-text">'.$row["studentFeedback"].'</p>
                                                </div>
                                                <div class="card-body justify-content-center align-items-center d-flex flex-column">
                                                    <div id="countdown-container"></div>
                                                </div>
                                            </div>
                                        </div>
                                    ';
                                }
                            } else {
                                echo "No feedback available.";
                            }
                        ?>
                    </div>
                </div>
            </div>
            <?php
                include "include/footer.php";
            ?>
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