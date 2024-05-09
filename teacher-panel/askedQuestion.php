<?php
    include '../php/connection.php';

    $sql = "SELECT * FROM askedquestions";
    $result = $conn -> query($sql);
    $status = "unsolved";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/dashboard.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Taskmaster | Teacher Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                <img src="../photo/logo.png" class="pe-2" style="border-radius: 50%; width: 50px;" alt="">TASKMASTER</div>
            <div class="list-group list-group-flush my-3">
                <a href="dashboard.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-hand-paper me-2"></i>Asked Questions</a>
                <a href="analytics.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Analytics</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paint-brush me-2"></i>CV Maker</a>
                <a href="resource.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paperclip me-2"></i>Resource</a>
                <a href="feedback.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
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
                    <h2 class="fs-2 m-0">Asked Questions</h2>
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

            <div class="container-fluid px-4 mt-4">
                <table class="table table-hover">
                    <thead class="table-dark">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Course Title</th>
                        <th scope="col">Department</th>
                        <th scope="col">Level of Education</th>
                        <th scope="col">Course Code</th>
                        <th scope="col">Question</th>
                        <th scope="col">Attachment</th>
                        <th scope="col">Deadline</th>
                        <th scope="col">Give Solution</th>
                      </tr>
                    </thead>
                    <?php
                        $i = 1;
                        if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            if ($status == $row["statuss"]) {
                            echo '<tbody>';
                            echo '<tr>';
                            echo '<th>'.$i.'</th>';
                            echo '<td>' . $row["subjects"] . '</td>';
                            echo '<td>' . $row["course"] . '</td>';
                            echo '<td>' . $row["degree"] . '</td>';
                            echo '<td>' . $row["course_code"] . '</td>';
                            echo '<td>' . $row["question"] . '</td>';
                            $_SESSION['details'] = $row["question"];
                            echo '<td>';

                            
                            if ($row["attachment"] != "") {
                                echo '<a class="btn btn-success" target="_blank" href="' . htmlspecialchars($row["attachment"]) . '">Download</a>';
                            } else {
                                echo '<p class="text-center">No attached file</p>';
                            }

                            echo '</td>';
                            echo '<td>' . $row["deadln"] . '</td>';
                            echo '<td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Insert solution</button></td>';
                            echo '</tr>';
                            echo '</tbody>';
                            $i++;
                            }
                        }
                        }
                        ?>

                  </table>

<!-- Modal start -->
<form action="../php/solution_answers.php" method="POST">  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Give the solution</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
          <input type="hidden" name="question" value="<?php echo $_SESSION["details"]?>">
          <div class="mb-3">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="Kidus" disabled>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input title="" type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="kidus@gmail.com" disabled>
            <div id="emailHelp" class="form-text">Insert the correct answer</div>
          </div>
          <div class="mb-3">
            <textarea class="form-control" name="solution_a" style="min-height: 280px" id="message" rows="3" required placeholder="Type here . . ."></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>
</form>



<!-- Modal end -->
            </div>
        </div>
    </div>

    <!-- /#page-content-wrapper -->
    </div>

    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>

    <script>
        $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
        })
    </script>
</body>
</html>