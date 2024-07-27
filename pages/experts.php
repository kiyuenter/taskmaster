<!DOCTYPE html>
<html lang="en">
 <?php
  include "../php/connection.php";
  session_start();
  include 'include/header.php';
 ?>
    <title>Taskmaster | Experts</title>
<body>
    <?php
      include 'include/navigation.php';
    ?>
      <div class="container-fluid exp-div-1">
        <div class="row exp-div-1 align-items-center justify-content-center">
          <div class="col-md-6 text-center">
            <img data-aos="zoom-out" data-aos-delay="200" src="../photo/become-expert.png" alt="Taskmaster Background" class="img-fluid expert-bg">
          </div>
          <div class="col-md-6 become-list">
            <h1 class="text-primary text-md-right">BECOME EXPERT</h1>
            <ul>
              <li><p>Level Up Your Skills: Become a Taskmaster Pro.</p></li>
              <li><p>Become a Taskmaster Power User.</p></li>
              <li><p>Become a Taskmaster Efficiency Expert.</p></li>
            </ul>
            <a href="../teachersignup.php" class="custom-btn btn-4 px-2"><span>BECOME EXPERT</span></a>
            <div class="scroll-down-btn text-center text-md-right">
              <button onclick="scrollDown()">Scroll Down</button>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid subject-1">
        <h2 class="text-center pb-4">Which subject you're perfect?</h2>
        <div class="row d-flex align-items-center justify-content-center">
          <div data-aos="zoom-in" data-aos-delay="100" class="col-md-4 pt-3">
            <div class="w-100 d-flex align-items-center justify-content-center image-container">
              <div class="image-overlay">
                <h3>MARKETING</h3>
              </div>
              <img class="p-2" src="../photo/teacher-type/marketing-teacher.jpg" alt="">
            </div>
          </div>
          <div data-aos="zoom-in" data-aos-delay="200" class="col-md-4 pt-3">
            <div class="w-100 d-flex align-items-center justify-content-center image-container">
              <div class="image-overlay">
                <h3>HISTORY</h3>
              </div>
              <img class="p-2" src="../photo/teacher-type/historical-teacher.jpg" alt="">
            </div>
          </div>
          <div data-aos="zoom-in" data-aos-delay="300" class="col-md-4 pt-3">
            <div class="w-100 d-flex align-items-center justify-content-center image-container">
              <div class="image-overlay">
                <h3>ACCOUNTING & FINANCE</h3>
              </div>
              <img class="p-2" src="../photo/teacher-type/accounting-&-finance-teacher.jpg" alt="">
            </div>
          </div>
        </div>

        <div class="row mt-4 d-flex align-items-center justify-content-center">
          <div data-aos="zoom-in" data-aos-delay="400" class="col-md-4 pt-3">
            <div class="w-100 d-flex align-items-center justify-content-center image-container">
              <div class="image-overlay">
                <h3>COMPUTER SCIENCE</h3>
              </div>
              <img class="p-2" src="../photo/teacher-type/computer-science-tutor.jpg" alt="">
            </div>
          </div>
          <div data-aos="zoom-in" data-aos-delay="500" class="col-md-4 pt-3">
            <div class="w-100 d-flex align-items-center justify-content-center image-container">
              <div class="image-overlay">
                <h3>SOFTWARE ENGINEERING</h3>
              </div>
              <img class="p-2" src="../photo/teacher-type/software-engineering-tutor.jpg" alt="">
            </div>
          </div>
          <div data-aos="zoom-in" data-aos-delay="600" class="col-md-4 pt-3">
            <div class="w-100 d-flex align-items-center justify-content-center image-container">
              <div class="image-overlay">
                <h3>MASTERS</h3>
              </div>
              <img class="p-2" src="../photo/teacher-type/master-class-tutor.jpg" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid pt-5 pb-5">
    <h2 class="text-center">OUR EXPERTS</h2>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="row w-100">
          <div class="col-md-4 mt-2">
            <div class="card" style="width: 18rem;">
              <img src="../teacherfiles/profile-photo/teacher-2.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <div class="feedback d-flex justify-content-center align-items-center">
                  <i class="bi bi-star-fill text-warning p-1"></i>
                  <i class="bi bi-star-fill text-warning p-1"></i>
                  <i class="bi bi-star-fill text-warning p-1"></i>
                  <i class="bi bi-star-fill text-warning p-1"></i>
                  <i class="bi bi-star-fill text-warning p-1"></i>
                </div>
                <h5 class="card-title">Kidus Seleshi</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Explore</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-2">
            <div class="card" style="width: 18rem;">
              <img src="../teacherfiles/profile-photo/teacher-3.avif" class="card-img-top" alt="...">
              <div class="card-body">
                <div class="feedback d-flex justify-content-center align-items-center">
                  <i class="bi bi-star-fill text-warning p-1"></i>
                  <i class="bi bi-star-fill text-warning p-1"></i>
                  <i class="bi bi-star-fill text-warning p-1"></i>
                  <i class="bi bi-star-fill text-warning p-1"></i>
                  <i class="bi bi-star-half text-warning p-1"></i>
                </div>
                <h5 class="card-title">Kidus Seleshi</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Explore</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 mt-2">
            <div class="card" style="width: 18rem;">
              <img src="../teacherfiles/profile-photo/teacher-4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Kidus Seleshi</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Explore</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-2">
            <div class="card" style="width: 18rem;">
              <img src="../teacherfiles/profile-photo/teacher-5.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <div class="feedback d-flex justify-content-center align-items-center">
                  <i class="bi bi-star-fill text-warning p-1"></i>
                  <i class="bi bi-star-fill text-warning p-1"></i>
                  <i class="bi bi-star-fill text-warning p-1"></i>
                  <i class="bi bi-star-fill text-warning p-1"></i>
                  <i class="bi bi-star-fill text-warning p-1"></i>
                </div>
                <h5 class="card-title">Kidus Seleshi</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Explore</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-2">
            <div class="card" style="width: 18rem;">
              <img src="../teacherfiles/profile-photo/teacher-6.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Kidus Seleshi</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Explore</a>
              </div>
            </div>
          </div>
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
    <script src="../js/loader.js"></script>
</body>
</html>