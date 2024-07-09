<!DOCTYPE html>
<html lang="en">
<?php
  include '../php/connection.php';
  session_start();

  function checkAuth() {
    if (!isset($_SESSION['status'])) {
      header('Location: ../join.php');
      exit();
    }
  }

  checkAuth();
  include 'include/header.php';
?>
    <title>Taskmaster | Ask Question</title>
<body>
    <?php
      include 'include/navigation.php';
    ?>
      <div class="container-fluid definition-ask img-container d-flex align-items-center justify-content-center">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-6 askimg d-flex align-items-center justify-content-center">
                <img data-aos="zoom-out" data-aos-delay="200" src="../photo/askquestion-studentt.jpg" alt="">
            </div>
            <div class="col-md-6">
                <div class="title-ask d-flex align-items-center justify-content-center">
                    <h2>Start asking questions today!</h2>
                </div>
                <div class="subtitle-ask d-flex align-items-center justify-content-center">
                    <ul>
                        <li>Get expert answers to your toughest questions. </li>
                        <li>Find solutions and unlock your learning potential.</li>
                    </ul>
                    <span>Scroll Down</span>
                </div>
            </div>
        </div>
      </div>

      <?php
        if(isset($_SESSION["msg"]) && $_SESSION["msg"] == true){
          $msg = $_SESSION["msg"];
          echo '
            <script>
              alert("'.$msg.'");
            </script>
          ';
          unset($_SESSION["msg"]);
        }
      ?>


      <div class="container-fluid askForm p-5">
        <div class="container p-5 w-75">
            <h1 class="text-center">Ask a Question</h1>
            <div class="container">
                <form action="../php/askQuestion.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                    <?php                 
                      if(isset($_SESSION["status"]) && $_SESSION["status"] == true ) {
                        $sql = "SELECT FName, emailAdd, LName FROM studentaccount";
                        $result  = mysqli_query($conn, $sql);
       
                        if ($result) {
                          if (mysqli_num_rows($result) > 0) {
                              while ($row = $result->fetch_assoc()) {

                                  if ($_SESSION["emailA"] === $row["emailAdd"]) {
                                      echo '
                                      <input type="text" name="askerEmail" value="' . $row["emailAdd"] . '" class="form-control" hidden>
                                      <input type="text" name="askerName" value="' . $row["FName"] . ' ' . $row["LName"] . '" class="form-control" hidden>';
                                  }
                              }
                            }
                          }
                    }
                      ?>
                        <input class="form-control" type="text" id="subject" name="subject" placeholder="Course" required>
                        <select title="Select_Course" class="form-control" id="course" name="course" required>
                            <option value="">Field of study</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="English">English</option>
                            <option value="Amharic">Amharic</option>
                            <option value="Science">Science</option>
                            <option value="Art">Accounting and Finance</option>
                            <option value="Art">Human Resources Management</option>
                            <option value="Art">Management</option>
                            <option value="Art">Marketing</option>
                            <option value="Art">Engineering</option>
                            <option value="Art">Computer Science</option>
                            <option value="other">Other(Specify below)</option>
                        </select>
                      <input class="form-control" placeholder="Other field of study" type="text" id="other_course" name="course" disabled>
                      <select title="Select Degree Type" class="form-control" id="course" name="degType" required>
                        <option value="">Degree Type</option>
                        <option value="BA">BA</option>
                        <option value="BSc">BSc</option>
                        <option value="BFA">BFA</option>
                        <option value="BAS">BAS</option>
                        <option value="MA">MA</option>
                        <option value="MSc">MSc</option>
                        <option value="MFA">MFA</option>
                        <option value="Ph.D">Ph.D</option>
                        <option value="Ed.D">Ed.D</option>
                        <option value="M.D">M.D</option>
                    </select>
                    <div class="d-flex align-items-center justify-content-between">
                        <input title="For high-school questions you can use 0" type="text" class="form-control w-25" name="course_code" placeholder="Course Code">
                      <div>
                        <input id="deadline" name="deadline" type="date" title="Assign Deadline" pla class="form-control">
                        <label for="deadline" class="text-success">Deadline</label>
                      </div>
                   </div>
                    <textarea placeholder="Type your question..." class="form-control" id="question" name="question" rows="10" required></textarea>
                    <input class="form-control" type="file" id="attachment" name="attachment" accept=".jpg,.jpeg,.png,.pdf">
                    <label for="attachment" class="text-success">Attachment (Optional)</label>
                    <input class="form-control" value="unsolved" type="hidden" name="statuss">
                    <div class="col-md-12 d-flex justify-content-center align-items-center pt-3">
                        <button class="btn submit-btn" type="submit">Ask Question</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


  <!-- Footer -->
    <?php
      include 'include/footer.php';
    ?>
  <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // JavaScript to add/remove scrolling class
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 0) {
                navbar.classList.remove('navbar-transparent');
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
                navbar.classList.add('navbar-transparent');
            }
        });

        function scrollDown() {
          window.scrollBy({
                top: window.innerHeight,
                behavior: 'smooth'
            });
        }

        function scrollUp() {
            window.scrollBy({
                top: -window.innerHeight,
                behavior: 'smooth'
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.1/js/v4-shims.js"></script>
    <script>
      var swiper = new Swiper('.swiper', {
        slidesPerView: 3,
        direction: getDirection(),
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
          },
          on: {
            resize: function () {
              swiper.changeDirection(getDirection());
            },
          },
        });
    
        function getDirection() {
          var windowWidth = window.innerWidth;
          var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';
    
          return direction;
        }
    </script>
    <script>
        const courseSelect = document.getElementById('course');
        const otherCourseInput = document.getElementById('other_course');

        courseSelect.addEventListener('change', function() {
          if (this.value === 'other') {
            otherCourseInput.disabled = false;
            otherCourseInput.required = true;
          } else {
            otherCourseInput.disabled = true;
            otherCourseInput.required = false;
          }
        });
    </script>
    <script src="../js/loader.js"></script>
</body>
</html>
