<?php
    include '../php/connection.php';

    $sql = "SELECT * FROM resources";
    $result = $conn -> query($sql);
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
                <a href="askedQuestion.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-hand-paper me-2"></i>Asked Questions</a>
                <a href="analytics.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Analytics</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paint-brush me-2"></i>CV Maker</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
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
                    <h2 class="fs-2 m-0">Resource</h2>
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

            <!-- promotion slide  -->
            <div class="container d-flex align-items-center justify-content-center mt-5">
                <div id="carouselExampleCaptions" class="carousel slide w-75">
                    <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../photo/slide-for-resourse-1.jpg" height="400px" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>All in one</h5>
                        <p>All book and resources in one place.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../photo/slide-for-resourse-2.jpg" height="400px" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>With you device</h5>
                        <p>You can access all resource using by one device.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../photo/slide-for-resourse-3.jpg" height="400px" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Like a book</h5>
                        <p>Use your all devices like book, or resources.</p>
                        </div>
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

              <!-- resource list -->
              <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mt-5 m-4" style="width: 18rem; border-radius: 20px;">

                        <?php
                            if ($result -> num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo '
                            <img src="'.$row["coverimg"].'" style="border-radius: 20px; height: 420px;" class="card-img-top" alt="'.$row["title"].'">
                            <div class="card-body">
                            <h5 class="card-title">'.$row["title"].'</h5>
                            <p class="card-text">'.$row["descr"].'</p>
                            </div>
                            <ul class="list-group list-group-flush">

                            <li class="list-group-item">'.$row["category"].'</li>
                            <li class="list-group-item">'.$row["page_count"].'</li>
                            <li class="list-group-item" style="display: none;">'.$row["timestamp"].'</li>
                            </ul>
                            <div class="card-body justify-content-center align-items-center d-flex flex-column">
                                <p><a id="download-link" href="#" data-file-path="'.$row["resourcefile"].'" class="btn btn-primary">Download</a></p>
                                <div id="countdown-container"></div>
                            </div>
                            ';
                        }
                    }
                ?>
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

    <!-- The user click download button start countdown and start download -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script>
        $(document).ready(function() {
        $("#download-link").click(function(event) {
            event.preventDefault(); // Prevent default link behavior (opening in new tab)
            startDownloadCountdown();
        });
        });
    </script>
    <script>
        function startDownloadCountdown() {
        $("#countdown-container").html("<b>Download starts in: </b>");
        var countdown = 5; // Set countdown duration (in seconds)
        var interval = setInterval(function() {
            $("#countdown-container").html("<b>Download starts in: " + countdown + " seconds</b>");
            countdown--;
            if (countdown <= 0) {
            clearInterval(interval);
            startDownload(); // Initiate download after countdown
            }
        }, 1000); // Update timer every 1 second
        }

        function startDownload() {
        var filePath = $("#download-link").data("filePath"); // Get file path from data attribute
        window.location.href = filePath; // Trigger download using window.location
        }
    </script>

</body>

</html>