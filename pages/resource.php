<!DOCTYPE html>
<html lang="en">
    <?php
        include "../php/connection.php";
        session_start();
        include "include/header.php";
    ?>
    <title>Taskmaster | Resource</title>
<body>
        <?php
            include "include/navigation.php";
        ?>
        <div class="container-fluid exp-div-1">
            <div class="row exp-div-1 align-items-center justify-content-center">
                <div class="col-md-6 text-center">
                    <img style="width:65% !important; border-radius: 50px !important" data-aos="zoom-out" data-aos-delay="200" src="../photo/resource_find.jpeg" alt="Taskmaster Background" class="img-fluid expert-bg">
                </div>
            <div class="col-md-6 become-list">
                <h1 class="text-primary text-md-right">ALL RESOURCE IN ONE SITE</h1>
                <ul>
                    <li><p>Educational materials.</p></li>
                    <li><p>Exit Exam documents for preparation.</p></li>
                    <li><p>Work resource and proposals.</p></li>
                    <li><p>Save your time.</p></li>
                </ul>
                <button class="custom-btn btn-4 px-2" onclick="scrollDown()"><span>FIND RESOURCE</span></button>
                <div class="scroll-down-btn text-center text-md-right">
                <button onclick="scrollDown()">Scroll Down</button>
                </div>
            </div>
            </div>
        </div>

        <div class="container m-2">
                   <div class="row m-2">
                        <?php
                            $sql = "SELECT * FROM resources";
                            $result = $conn -> query($sql);
                            if ($result -> num_rows > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo '
                                    <div class="col-md-6">
                                        <div class="card mt-5 m-4" style="width: 18rem; border-radius: 20px;">            
                                            <img src="'.$row["coverimg"].'" style="border-radius: 20px; height: 420px;" class="card-img-top" alt="'.$row["title"].'">
                                            <div class="card-body">
                                                <h5 class="card-title">'.$row["title"].'</h5>
                                                <p class="card-text">'.$row["descr"].'</p>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">'.$row["category"].'</li>
                                                <li class="list-group-item">'.$row["page_count"].'</li>
                                                <li class="list-group-item" style="display: none;">'.$row["registration_date"].'</li>
                                            </ul>
                                            <div class="card-body justify-content-center align-items-center d-flex">
                                                <p><a id="download-link" href="'.$row["resourcefile"].'" data-file-path="" class="btn btn-primary m-2"><i class="lni lni-download"></i></a></p>
                                            </div>
                                        </div>
                                    </div>
                                ';
                            }
                        }
                    ?>
                            
                    </div>
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