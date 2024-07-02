<div class="navigation">
      <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-transparent fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand text-dark" href="../index.php"><img style="border-radius: 20px; margin-right: 5px;" src="../photo/logo.gif" alt="" width="50px">Taskmaster</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active text-dark me-4 text-center w-100" aria-current="page" href="../index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light text-dark me-4 text-center w-100" href="experts.php">Experts</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark me-4 text-center w-100 text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Service
                </a>
                <ul class="dropdown-menu dr">
                  <li><a class="dropdown-item text-dark" href="askQuestion.php">Ask Question</a></li>
                  <li><a class="dropdown-item text-dark" href="cvTemplate.php">CV Maker</a></li>
                  <li><a class="dropdown-item text-dark" href="resource.php">Resource</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light text-dark me-4 text-center w-100" href="contactUs.php">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light text-dark me-4 text-center w-100" href="aboutUs.php">About Us</a>
              </li>
            </ul>
                <?php
                    if(isset($_SESSION["status"]) && $_SESSION["status"] == true ) {
                        echo '
                        <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark me-4 text-center w-100 text-light" href="#"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle" style="font-size: 24px;"></i>
                            </a>
                            <ul class="dropdown-menu dr login-des w-100">
                                <div class="bg-info-subtle text-center w-100">
                                <span class="p-2 text-success w-100">Welcome ' . $_SESSION["username"] . '😊</span>
                                </div>
                                <li><a class="dropdown-item text-dark" href="pages/askQuestion.html">Profile</a></li>
                                <li><a class="dropdown-item text-dark" href="pages/cvTemplate.html">Asked Questions</a></li>
                                <li><a class="dropdown-item text-dark" href="pages/resource.html">Setting</a></li>
                                <li><a class="dropdown-item text-dark" href="../php/logout.php" onclick="return confirm(\'Are you sure you want to logout?\');">Logout</a></li>
                            </ul>
                            </li>
                        </ul>';
                        } else {
                        echo '
                        <div class="d-flex" role="search">
                            <a href="../join.php" class="btn me-2 join-button">SIGN IN</a>
                            <a href="../accountType.html" class="btn join-button">JOIN US</a>
                        </div>';
                        }
                    ?>
          </div>
        </div>
      </nav>
    </div>