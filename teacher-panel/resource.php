<?php
    session_start();
    include '../php/connection.php';

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
    <title>Taskmaster | Resource</title>

    
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
                <a href="cvtemplate.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paint-brush me-2"></i>CV Maker</a>
                <a href="resource.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
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
                    <h2 class="fs-2 m-0">Resource</h2>
                </div>
                <?php
                    include "include/navigation.php";
                ?>

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
                            $sql = "SELECT * FROM resources";
                            $result = $conn -> query($sql);

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
                            <li class="list-group-item" style="display: none;">'.$row["registration_date"].'</li>
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