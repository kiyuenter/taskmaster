<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ask a Question</title>
    <link rel="stylesheet" href="../css/askQuestion.css">
    <link rel="stylesheet" href="../css/styles.css"/>
    <link rel="icon" href="../photo/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Taskmaster | Ask Question</title>
    <style>
        .navbar-nav {
            margin: auto;
            display: flex;
            flex-direction: row;
        }

        .navbar-transparent, .dropdown-menu {
          background-color: #ffffff00 !important;
          background: linear-gradient(to top, #e2eef500, #d2eaf000) !important;
            transition: background-color 0.6s ease;
            color: white !important;
        }

        .navbar-scrolled {
            background-color: rgba(0, 0, 0, 0.678) !important;
            background: linear-gradient(to top, #98bfd8da, #fdffff) !important;
            transition: background-color 0.6s ease;
            border-bottom:1px #42414134 solid ;
            color: white;
        }

        .dr {
          background-color: #96055e !important;
          background: linear-gradient(to top, #98bfd8da, #98bfd8da) !important;
          border: none;
        }
    </style>
</head>
<body>
    <div class="navigation">
        <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-transparent fixed-top">
          <div class="container-fluid">
            <a class="navbar-brand text-dark" href="../index.html"><img style="border-radius: 20px; margin-right: 5px;" src="../photo/logo.gif" alt="" width="50px">Taskmaster</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
              <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                  <a class="nav-link active text-dark me-4 text-center w-100" aria-current="page" href="../index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light text-dark me-4 text-center w-100" href="experts.html">Experts</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-dark me-4 text-center w-100 text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Service
                  </a>
                  <ul class="dropdown-menu dr">
                    <li><a class="dropdown-item text-dark" href="askQuestion.html">Ask Question</a></li>
                    <li><a class="dropdown-item text-dark" href="#">CV Maker</a></li>
                    <li><a class="dropdown-item text-dark" href="#">Resource</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light text-dark me-4 text-center w-100" href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light text-dark me-4 text-center w-100" href="#">About Us</a>
                </li>
              </ul>
              <form class="d-flex" role="search">
                <a href="../join.php" class="btn join-button me-2">SIGN IN</a>
                <a href="../teachersignup.php" class="btn join-button">JOIN US</a>
              </form>
            </div>
          </div>
        </nav>
      </div>
      <div class="container-fluid definition-ask img-container d-flex align-items-center justify-content-center">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-6 askimg d-flex align-items-center justify-content-center">
                <img src="../photo/askquestion-studentt.jpg" alt="">
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
      <div class="container-fluid askForm p-5">
        <div class="container p-5 w-75">
            <h1 class="text-center">Ask a Question</h1>
            <div class="container">
                <form action="../php/askQuestion.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <input type="text" name="askerEmail" value="kiyuenterprise@gmail.com" class="form-control">
                        <input type="text" name="askerName" value="Kidus Seleshi" class="form-control">
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
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <img src="../photo/logo.gif" width="50px" style="border-radius: 50%;" alt="Taskmaster logo">Taskmaster
            </h6>
            <p class="text-center">
              "<span class="text-primary">TaskMaster</span>: Elevating your tasks, empowering your success."
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Service
            </h6>
            <p>
              <a href="askQuestion.html" class="text-reset">Ask Question</a>
            </p>
            <p>
              <a href="#!" class="text-reset">CV Maker</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Resource</a>
            </p>
            <p>
              <a href="#!" class="text-reset">FAQ</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Home</a>
            </p>
            <p>
              <a href="#!" class="text-reset">About Us</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Experts</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> ADDIS ABABA, ETHIOPIA</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              info@taskmaster.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 251 11 777 55 55</p>
            <p><i class="fas fa-print me-3"></i> + 251 11 555 77 77</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2024 Copyright:
      <a class="text-reset fw-bold" href="index.html">Taskmaster</a>
    </div>
    <!-- Copyright -->
  </footer>
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

    <!-- testimonial -->
      <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Font awesome -->
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
</body>
</html>