<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taskmaster | Evaluation Questions</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="icon" href="../../../photo/logo.png">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
    <div class="wrapper">
    <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <img src="../../../photo/logo.png" style="height: 30px; border-radius: 50%;" alt="">
                </button>
                <div class="sidebar-logo">
                    <a href="#">Taskmaster</a>
                </div>
            </div>
            <ul class="sidebar-nav">
            <li class="sidebar-item">
                <li class="sidebar-item">
                    <a href="../../dashboard.php" class="sidebar-link">
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
                            <a href="../student_account.php" class="sidebar-link ms-2">Student Account</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed has-dropdown ms-2" data-bs-toggle="collapse"
                                data-bs-target="#teacheraccount" aria-expanded="false" aria-controls="teacheraccount">Teacher Account</a>
                            <ul id="teacheraccount" class="ms-4 sidebar-dropdown list-unstyled collapse" data-bs-parent="#teacheraccount">
                                <li class="sidebar-item">
                                    <a href="../teacher_pages/new_registrations.php" class="sidebar-link">New Registrations</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../teacher_pages/existing_accounts.php" class="sidebar-link">Existing Accounts</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../teacher_pages/student_feedback.php" class="sidebar-link">Student Feedback</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
<!-- Evaluation -->
                <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed has-dropdown some" data-bs-toggle="collapse"
                                data-bs-target="#evaluation" aria-expanded="false" aria-controls="evaluation">
                                <i class="lni lni-flag"></i>
                                <span>Evaluation</span>
                            </a>
                                <ul id="evaluation" class="sidebar-dropdown list-unstyled collapse ms-4" data-bs-parent="#evaluation">
                                <li class="sidebar-item some">
                                    <a href="../evaluations_pages/questions.php" class="sidebar-link ms-2">Evaluation Questions</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../evaluations_pages/teachers_answers.php" class="sidebar-link ms-2">Teachers Answer</a>
                                </li>
                            </ul>
                    </a>
                </li>
                <!-- Assignment -->
                <li class="sidebar-item">
                    <a href="../assignment.php" class="sidebar-link">
                        <i class="lni lni-pencil-alt"></i>
                        <span>Asked Questions</span>
                    </a>
                </li>
            <!-- Resource -->
                <li class="sidebar-item">
                    <a href="../resource.php" class="sidebar-link">
                        <i class="lni lni-upload"></i>
                        <span>Resource</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="../notification.php" class="sidebar-link">
                        <i class="lni lni-alarm"></i>
                        <span>Notification</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="../report.php" class="sidebar-link">
                        <i class="lni lni-files"></i>
                        <span>Report</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="../../../php/logout.php" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-4 py-2">
                <h3 class="fw-bold fs-4 mb-3 mt-3">Evaluation Questions</h3>
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
                            <div class="col-12 col-md-12">
                                <div class="card border-0 info">
                                    <div class="card-body py-4">
                                        <h5 class="mb-2 fw-bold">
                                            Total Questions
                                        </h5>
                                        <p class="mb-2 fw-bold">
                                            <?php
                                                include '../../../php/connection.php';

                                                $sql = "SELECT COUNT(*) AS allQue FROM evaluationque";
                                                $teach = mysqli_query($conn, $sql);
                                                $rowteach = mysqli_fetch_assoc($teach);

                                                $count_teach = $rowteach['allQue'];
                                                echo $count_teach;
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid bg-light ask d-flex justify-content-center align-items-center">
                            <div class="w-50">
                                <h2 class="text-center mt-5">Add Evaluation Questions</h2>
                                <form action="../../../php/addEvaluation.php" method="get" class=" w-100 m-5">
                                    <label for="question">Question Title</label>
                                    <input name="title" id="question" type="text" class="form-control" placeholder="Write question title . . ." required>
                                    <label for="question">Choose A</label>
                                    <input name="chooseA" id="question" type="text" class="form-control" placeholder="Write choose A . . ." required>
                                    <label for="question">Choose B</label>
                                    <input name="chooseB" id="question" type="text" class="form-control" placeholder="Write choose B . . ." required>
                                    <label for="question">Choose C</label>
                                    <input name="chooseC" id="question" type="text" class="form-control" placeholder="Write choose C . . ." required>
                                    <label for="question">Choose D</label>
                                    <input name="chooseD" id="question" type="text" class="form-control" placeholder="Write choose D . . ." required>
                                    <label for="question">Answer</label>
                                    <input name="answer" id="question" type="text" class="form-control" placeholder="Write answer . . ." required>
                                    <p class="mt-2">For who?</p>
                                    <div class="select-dep">
                                        <select name="edu" id="lvlofedu" title="Select" class="form-control" required>
                                            <option value="select">Select</option>
                                            <option value="high">High School</option>
                                            <option value="college">Collage</option>
                                        </select>
                                        <select title="dep-title" name="department" id="department" class="form-control" required disabled>
                                            <option value="">Select Department</option>
                                        </select>  
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <button class="btn btn-success mt-3">Insert Question</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <h4 class="text-center text-primary">List of Questions</h4>
                        <table class="table table-dark table-hover">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Question</th>
                                <th scope="col">Choose A</th>
                                <th scope="col">Choose B</th>
                                <th scope="col">Choose C</th>
                                <th scope="col">Choose D</th>
                                <th scope="col">Answer</th>
                                <th scope="col">Department</th>
                                <th scope="col" class="text-center">Edit</th>
                                <th scope="col" class="text-center">Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include '../../../php/connection.php';
                                    $sql = "SELECT * FROM evaluationque";
                                    $result = $conn -> query($sql);
                                    $i = 1;
                                    if($result -> num_rows > 0){
                                        while($row = mysqli_fetch_assoc($result)){
                                            echo '
                                                <tr>
                                                    <th scope="row">'.$i.'</th>
                                                    <td>'.$row["evaDetail"].'</td>
                                                    <td>'.$row["A"].'</td>
                                                    <td>'.$row["B"].'</td>
                                                    <td>'.$row["C"].'</td>
                                                    <td>'.$row["D"].'</td>
                                                    <td>'.$row["departQ"].'</td>
                                                    <td>'.$row["answer"].'</td>
                                                    <td>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <button  type="button" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-success me-2"><i class="lni lni-pencil"></i></button>
                                                    </div>
                                                    </td>
                                                    <td>
                                                    <div class="d-flex align-items-center justify-content-center">

                                                    <button class="btn btn-danger"><i class="lni lni-trash-can"></i></button>
                                                    </div>
                                                    </td>
                                                </tr>

                                                ';
                                                $i++;
                                        }
                                    }
                              ?>
                            </tbody>
                          </table>
<!-- Modal Form -->
                          <div class="modal" tabindex="-1" role="dialog" id="myModal">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Question</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <input class="w-100 m-2 form-control" type="text" value="Question">
                                  <div class="d-flex align-items-center">
                                    <p class="m-2">A.</p>
                                    <input class="w-100 m-2 form-control" type="text" value="Question">
                                  </div>
                                  <div class="d-flex align-items-center">
                                    <p class="m-2">B.</p>
                                    <input class="w-100 m-2 form-control" type="text" value="Question">
                                  </div>
                                  <div class="d-flex align-items-center">
                                    <p class="m-2">C.</p>
                                    <input class="w-100 m-2 form-control" type="text" value="Question">
                                  </div>
                                  <div class="d-flex align-items-center">
                                    <p class="m-2">D.</p>
                                    <input class="w-100 m-2 form-control" type="text" value="Question">
                                  </div>
                                  <select class="form-control">
                                    <option value="Select">Select</option>
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="English">English</option>
                                    <option value="Amharic">Amharic</option>
                                    <option value="Science">Science</option>
                                    <option value="Accounting and Finance">Accounting and Finance</option>
                                    <option value="Human Resources Management">Human Resources Management</option>
                                    <option value="Management">Management</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Computer Science">Computer Science</option>
                                  </select>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          </div>
                    </div>
                        <script>
                            // -------- Enable department
                            const educationLevelSelect = document.getElementById("lvlofedu");
                            const departmentSelect = document.getElementById("department");
                            const acadamicSelect = document.getElementById("acadamic");
                            
                            function updateDepartmentOptions() {
                            const selectedLevel = educationLevelSelect.value;
                            departmentSelect.disabled = true; // Disable department selection initially
                            if (selectedLevel === "select") {
                                        departmentSelect.innerHTML = "";
                                        departmentSelect.disabled = true;
                                    } else if (selectedLevel === "high") {
                                        departmentSelect.innerHTML = ""; // Clear existing options
                                        departmentSelect.options.add(new Option("Department"));
                                        departmentSelect.options.add(new Option("Mathematics"));
                                        departmentSelect.options.add(new Option("English"));
                                        departmentSelect.options.add(new Option("Amharic"));
                                        departmentSelect.options.add(new Option("Science"));
                                        departmentSelect.options.add(new Option("Art"));
                                    
                                    } else if (selectedLevel === "college") {
                                        departmentSelect.innerHTML = ""; // Clear existing options
                                        departmentSelect.options.add(new Option("Department"));
                                        departmentSelect.options.add(new Option("Accounting and Finance"));
                                        departmentSelect.options.add(new Option("Human Resources Management"));
                                        departmentSelect.options.add(new Option("Management"));
                                        departmentSelect.options.add(new Option("Marketing"));
                                        departmentSelect.options.add(new Option("Engineering"));
                                        departmentSelect.options.add(new Option("Computer Science"));
                                        
                                    } else {
                                        departmentSelect.innerHTML = ""; // Clear existing options
                                        departmentSelect.options.add(new Option("Select Department")); // Default option
                                    }
                            
                                    if (selectedLevel !== "") {
                                        departmentSelect.disabled = false; // Enable department selection after choosing a level
                                    }
                            
                                    if (selectedLevel === "select") {
                                departmentSelect.disabled = true; // Enable department selection after choosing a valid level
                            }
                                    }
                            
                            educationLevelSelect.addEventListener("change", updateDepartmentOptions);
                            
                            // Call the function initially to set the disabled state
                            updateDepartmentOptions();
                            
                            // Form validation and popup message
                            const form = document.querySelector("form");
                            form.addEventListener("submit", (event) => {
                            if (educationLevelSelect.value === "select" || departmentSelect.value === "" || departmentSelect.value === "Department") {
                                event.preventDefault();
                            
                                alert("Please select a valid Level of Education, Department, and Academic Degree."); // Display popup message
                            }
                            });
                        </script>
                    </div>
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
    <script src="../../script.js"></script>
</body>

</html>