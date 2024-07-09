<!DOCTYPE html>
<html lang="en">
    <?php
      session_start();

      include "include/header.php";
    ?>
    <link rel="stylesheet" href="../css/cvTemplate.css">
<body>
    <?php
      include "include/navigation.php";
    ?>

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
      <?php
        include "include/footer.php";
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