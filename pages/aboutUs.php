<!DOCTYPE html>
<html lang="en">
    <?php
        include "../php/connection.php";
        session_start();

        include "include/header.php";
    ?>
    <title>Taskmaster | About Us</title>
<body>
    <?php
        include "include/navigation.php";
    ?>

    <div class="container-fluid exp-div-1-about">
        <div class="row exp-div-1-about align-items-center justify-content-center">
            <div class="col-md-6 text-center">
            <img data-aos="zoom-out" data-aos-delay="200" src="../photo/about_us.png" alt="Taskmaster Background" class="img-fluid expert-bg">
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
        <h1 class="text-center m-4">About Us</h1>
        <div class="container w-75">
            <h3>Our Mission</h3>
            <p>At TaskMaster Assignment Helper and CV Maker, our mission is to empower students and professionals to achieve their academic and career goals with ease and confidence. We provide expert assistance in assignment completion and CV creation, ensuring our clients stand out and succeed in their pursuits.</p>

            <h3>Our Story</h3>
            <p>Founded in 2024, TaskMaster Assignment Helper and CV Maker was born out of the recognition that students and job seekers often need specialized support to excel. Our founders, a group of educators, combined their expertise to create a platform that offers top-notch assignment help and professional CV crafting services.</p>

            <h3>Our Values</h3>
            <ul>
                <li><b>Excellence:</b> We strive for the highest quality in everything we do, from assignments to CVs.</li>
                <li><b>Integrity: </b>We operate with honesty, transparency, and respect in all our interactions.</li>
                <li><b>Customer Focus: </b>We prioritize the needs of our clients and tailor our services to meet their unique requirements.</li>
                <li><b>Empowerment: </b>We believe in empowering our clients with the tools and knowledge they need to succeed.</li>
            </ul>

            <h3>What We Do</h3>
            <p>TaskMaster offers two primary services:</p>
            <ul>
                <li><b>Assignment Helper: </b>Our team of academic experts provides comprehensive assistance with assignments, ensuring they meet academic standards and deadlines. We cover a wide range of subjects and educational levels, offering personalized support tailored to each client's needs.</li>
                <li><b>CV Maker: </b>Our professional CV crafting service helps job seekers create compelling and impactful resumes. We highlight your skills, experience, and achievements to make you stand out to potential employers.</li>
            </ul>

            <h3>Meet Our Team</h3>
            <p>Our dedicated team is comprised of educators, programmer, and designer who are passionate about helping you succeed.</p>
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-3">
                        <img src="" alt="">
                    </div>
                    <div class="col-md-9">

                    </div>
                </div>
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