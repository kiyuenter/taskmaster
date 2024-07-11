<!DOCTYPE html>
<html lang="en">
    <?php
        include "../php/connection.php";
        session_start();

        include "include/header.php";
    ?>
    <title>Taskmaster | Contact Us</title>
<body>
    <?php
        include "include/navigation.php";
    ?>
    <div class="container-fluid exp-div-1-contact">
        <div class="row exp-div-1 align-items-center justify-content-center">
          <div class="col-md-6 text-center">
            <img data-aos="zoom-out" data-aos-delay="200" src="../photo/contact_us_image.png" alt="Taskmaster Background" class="img-fluid expert-bg">
          </div>
          <div class="col-md-6 become-list">
              <p class="text-center" style="font-size: 20px; line-height: 45px;">Thank you for visiting our website! We value your feedback and are here to assist you with any questions or concerns you may have. <span class="text-white">Whether you need more information about our services, have a specific inquiry, or just want to share your thoughts, we're here to help.</span></p>
              <div class="d-flex justify-content-center align-items-center m-5">
                <button class="custom-btn btn-4 px-2" onclick="scrollDown()"><span>Contact Us</span></button>
              </div>
            <div class="scroll-down-btn text-center text-md-right">
              <button onclick="scrollDown()">Scroll Down</button>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
      <h2>Contact Us</h2>
        <div class="container mt-5">
          <form>
              <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
              </div>
              <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
              </div>
              <div class="form-group">
                  <label for="subject">Subject</label>
                  <input type="text" class="form-control" id="subject" placeholder="Enter subject" required>
              </div>
              <div class="form-group">
                  <label for="message">Message</label>
                  <textarea class="form-control" id="message" rows="4" placeholder="Enter your message" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary mt-3">Submit</button>
          </form>
        </div>
        <div class="container">
          <div class="container">
            <img src="../photo/contact_us_img.jpeg" alt="">
          </div>  
        </div>
      </div>

    <?php
        include "include/footer.php";
    ?>

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