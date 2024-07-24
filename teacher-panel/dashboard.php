<?php
    session_start();
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

        $sql_solved = "SELECT COUNT(*) AS solved_count FROM askedquestions WHERE statuss = 'solved'";
        $result_solved = mysqli_query($conn, $sql_solved);
        $row_solved = mysqli_fetch_assoc($result_solved);
        $solved_count = $row_solved['solved_count'];

        $sql_unsolved = "SELECT COUNT(*) AS unsolved_count FROM askedquestions WHERE statuss = 'unsolved'";
        $result_unsolved = mysqli_query($conn, $sql_unsolved);
        $row_unsolved = mysqli_fetch_assoc($result_unsolved);
        $unsolved_count = $row_unsolved['unsolved_count'];

        // Close connection
        $conn->close();

        // Encode data as JSON for JavaScript (consider security for real applications)
        $data_json = json_encode($data);
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
        <?php
            include "include/header.php";
        ?>
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
                <a href="cvTemplate.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paint-brush me-2"></i>CV Maker</a>
                <a href="resource.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paperclip me-2"></i>Resource</a>
                <a href="feedback.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
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
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>
            <?php
                include "include/navigation.php";
            ?>
            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
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
                                <?php
                                    include '../php/connection.php';
                                    $sql_unsolved = "SELECT COUNT(*) AS own FROM askedquestions WHERE solverEmail = '".$_SESSION['email']."'"; // Replace 'status' and 'solved' with your actual column and value
                                    $result_unsolved = mysqli_query($conn, $sql_unsolved);
                                    $row_solved = mysqli_fetch_assoc($result_unsolved);
                                    $own = $row_solved['own'];
                                ?>
                                <h3 class="fs-2"><?php echo $own; ?></h3>
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
            <!-- Footer -->
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