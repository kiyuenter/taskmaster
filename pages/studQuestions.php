<?php
  session_start();
?>
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
    <div class="container-fluid d-flex justify-content-center align-items-center" style="padding-bottom: 50px; padding-top: 100px !important; background: rgb(108,247,149);
background: linear-gradient(256deg, rgba(108,247,149,0.8799894957983193) 0%, rgba(112,115,245,0.7567401960784313) 99%);">
      <div class="container-fluid row">
      <h2 class="text-center">Your Questions</h2>
      <?php
        if(isset($_SESSION['msg']) && $_SESSION['msg'] == true) {
          echo '
            <script>alert("'.$_SESSION["msg"].'")</script>
          ';
          unset($_SESSION["msg"]);
        }

      ?>
          <?php
          if(isset($_SESSION["status"]) && $_SESSION["status"] == true ) {
              include "../php/connection.php";
              $user = $_SESSION["emailA"];
              $sql = "SELECT * FROM askedquestions WHERE askerEmail = '$user'";
              $result = mysqli_query($conn, $sql);
              $i = 1;
              $j = 1;
              if(mysqli_num_rows($result) > 0)
              {
                while($row = $result -> fetch_assoc())
                {
                  echo '
                  <div class="col-md-4">
                    <div class="card m-2">
                      <div class="container-fluid d-flex justify-content-end mt-2" style="height: 20px;">
                        ';
                        if($row["statuss"] == "solved") {
                          echo '<span class="badge text-bg-success">'.$row["statuss"].'</span>';
                        } else{
                          echo '<span class="badge text-bg-danger">'.$row["statuss"].'</span>';
                        }
                        echo '
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">'.$row["subjects"].'</h5>
                        <p class="card-text">'.$row["question"].'</p>
                        <div class="container-fluid d-flex justify-content-between">
                          <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal'.$i.'">View Detail</button>
                          <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModals'.$j.'">Give Feedback</button>
                        </div>
                      </div>
                    </div>
                    <!-- Modal start -->
                      <div class="modal fade" id="exampleModal'.$i.'" tabindex="-1" aria-labelledby="exampleModalLabel'.$i.'" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel'.$i.'">'.$i.'.</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <input type="hidden" name="askerEmail" value="'.$row["askerEmail"].'">
                                      <input type="hidden" name="question" value="'.$row["question"].'">
                                      <p style="font-size: 14px;">'.$row["question"].'</p>
                                      <hr>
                                      <div class="mb-3">
                                          <input title="" type="hidden" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="'.$user.'">
                                          <div id="emailHelp" class="form-text"><b>Solution</b></div>
                                      </div>
                                      <div class="mb-3">';
                                      if($row['solution_answer'] == ""){
                                        echo "Sorry, this question is not solved. Please wait some minute.";
                                      } else {
                                        echo '<p style="font-size: 12px;">'.$row["solution_answer"].'</p>';
                                      }
                                      echo '
                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  <!-- Modal end -->

                  <!-- Modal start -->
                  <form action="../php/feedback_student.php" method="POST">
                      <div class="modal fade" id="exampleModals'.$j.'" tabindex="-1" aria-labelledby="exampleModalLabel'.$j.'" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabels'.$j.'">For Question N<u>o</u> '.$j.'.</h5>
                                      <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <input type="hidden" name="askerEmail" value="'.$row["askerEmail"].'">
                                      <input type="hidden" name="question" value="'.$row["question"].'">
                                      <input type="hidden" name="solverEmail" value="'.$row["solverEmail"].'">
                                      <p style="font-size: 14px;">'.$row["question"].'</p>
                                      <hr>
                                      <div class="mb-3">
                                          <input title="" type="hidden" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="'.$user.'">
                                          <div id="emailHelp" class="form-text"><b>Feedback</b></div>
                                      </div>
                                      <div class="mb-3">
                                        <textarea style="font-size: 12px;" class="form-control" type="text" name="feedback" placeholder="Write your feedback here . . ." required></textarea>
                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </form>
                  <!-- Modal end -->
                  </div>
                  ';
                  $i++;
                  $j++;
                }
              }
            } else{
              echo'
              <p>There is no questons</p>';
            }
          ?>
      </div>
    </div>


        <?php
            include "include/footer.php";
        ?>
    <script src="../js/loader.js"></script>
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