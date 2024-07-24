<!DOCTYPE html>
<html lang="en">
    <?php
        include "include/header.php";
    ?>
    <title>Taskmaster | My Questions</title>
<body>
        <?php
            include "include/navigation.php";
        ?>



        <?php
            include "include/footer.php";
        ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../js/loader.js"></script>
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