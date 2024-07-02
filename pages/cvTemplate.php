<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/styles.css"/>
        <link rel="stylesheet" href="../css/cvTemplate.css">
        <link rel="icon" href="../photo/logo.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- Font icon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>CV Maker | Taskmaster</title>
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
                    <li><a class="dropdown-item text-dark" href="cvTemplate.html">CV Maker</a></li>
                    <li><a class="dropdown-item text-dark" href="resource.html">Resource</a></li>
                    <li><a class="dropdown-item text-dark" href="faq.html">FAQ</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light text-dark me-4 text-center w-100" href="contactUs.html">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light text-dark me-4 text-center w-100" href="aboutUs.html">About Us</a>
                </li>
              </ul>
              <div class="d-flex" role="search">
                
                <a href="../join.php" class="btn me-2 join-button">SIGN IN</a>
                <a href="../accountType.html" class="btn join-button">JOIN US</a>
              </div>
            </div>
          </div>
        </nav>
    </div>

    <div class="container-fluid cv-try d-flex justify-content-center align-items-center">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6 w-50 wetry d-flex justify-content-center align-items-center">
                <img src="../photo/wetry-template.jpg" alt="">
            </div>
            <div class="col-md-6 w-50">
              <h1>We develop new template</h1>
              <h3>Choose & get your CV</h3>
            </div>
        </div>
    </div>

    <div class="container-fluid cv-store">
      <h1 class="text-center pt-4">CV TEMPLATE</h1>
      <div class="list-cv row d-flex justify-content-center align-items-center">
        <div class="col-md-4">
          <div class="cv-temp-img">
            <img src="../Cv-Template/image/template-1.png" alt="">
          </div>
          <div class="cv-temp-img">
            <a href="../Cv-Template/cvPage/jhonCv.html" class="btn btn-primary">Explore</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="cv-temp-img">
            <img src="../Cv-Template/image/template-2.jpg" alt="">
          </div>
          <div class="cv-temp-img">
            <a href="#" class="btn btn-primary">Explore</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="cv-temp-img">
            <img src="../Cv-Template/image/template-3.avif" alt="">
          </div>
          <div class="cv-temp-img">
            <a href="#" class="btn btn-primary">Explore</a>
          </div>
        </div>
      </div>
      <div class="list-cv row d-flex justify-content-center align-items-center">
        <div class="col-md-4">
          <div class="cv-temp-img">
            <img src="../Cv-Template/image/template-4.svg" alt="">
          </div>
          <div class="cv-temp-img">
            <a href="#" class="btn btn-primary">Explore</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="cv-temp-img">
            <img src="../Cv-Template/image/template-5.webp" alt="">
          </div>
          <div class="cv-temp-img">
            <a href="#" class="btn btn-primary">Explore</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="cv-temp-img">
            <img src="../Cv-Template/image/template-6.png" alt="">
          </div>
          <div class="cv-temp-img">
            <a href="#" class="btn btn-primary">Explore</a>
          </div>
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
              <img src="photo/logo.gif" width="50px" style="border-radius: 50%;" alt="">Taskmaster
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
              <a href="pages/askQuestion.html" class="text-reset">Ask Question</a>
            </p>
            <p>
              <a href="pages/cvTemplate.html" class="text-reset">CV Maker</a>
            </p>
            <p>
              <a href="pages/resource.html" class="text-reset">Resource</a>
            </p>
            <p>
              <a href="pages/faq.html" class="text-reset">FAQ</a>
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
              <a href="index.html" class="text-reset">Home</a>
            </p>
            <p>
              <a href="pages/aboutUs.html" class="text-reset">About Us</a>
            </p>
            <p>
              <a href="pages/experts.html" class="text-reset">Experts</a>
            </p>
            <p>
              <a href="pages/help.html" class="text-reset">Help</a>
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
</body>
</html>