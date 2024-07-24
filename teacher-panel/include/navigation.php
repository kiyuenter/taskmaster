                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <?php
                        include '../php/connection.php';
                        if(isset($_SESSION["status"]) && $_SESSION["status"] == true) {
                        $check = $_SESSION["email"];

                        $sql = "SELECT * FROM teacheraccount WHERE emailAdd = '".$check."'";
                        $result = mysqli_query($conn, $sql);

                        if(mysqli_num_rows($result) > 0) {
                            $row = $result -> fetch_assoc();
                            $_SESSION["user"] = $row["FName"];
                            $user = $_SESSION["user"];
                            
                            echo '
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../photo/teacher-type/'.$row["profilePicture"].'" style="width: 40px; border-radius: 50%; border: 2px solid #b41af1;" alt=""> &nbsp'.$row["FName"].'
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../php/logout.php">Logout</a></li>
                                </ul>
                            </li>
                            ';
                        }
                        }
                        ?>
                    </ul>
                </div>
            </nav>