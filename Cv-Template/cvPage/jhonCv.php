<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../css/styles.css" />
    <link rel="stylesheet" href="../../css/cvStyle/jhonCv.css" />
    <link rel="icon" href="../../photo/logo.png" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <!-- Font icon -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <title>Jhon CV | Taskmaster</title>
    <style>
      .navbar-nav {
        margin: auto;
        display: flex;
        flex-direction: row;
      }

      .navbar-transparent,
      .dropdown-menu {
        background-color: #ffffff00 !important;
        background: linear-gradient(to top, #e2eef500, #d2eaf000) !important;
        transition: background-color 0.6s ease;
        color: white !important;
      }

      .navbar-scrolled {
        background-color: rgba(0, 0, 0, 0.678) !important;
        background: linear-gradient(to top, #98bfd8da, #fdffff) !important;
        transition: background-color 0.6s ease;
        border-bottom: 1px #42414134 solid;
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
      <?php
        include "include/navigation.php";
      ?>
    </div>

    <div
      class="container-fluid current-form d-flex align-items-center justify-content-center"
    >
      <div class="container form-all m-5">
        <form action="jhonCvDisplay.php" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-outline">
                <h3>Personal Information</h3>
                <input
                  type="text"
                  class="form-control input-custom"
                  placeholder="Full Name"
                  required
                  name="fullname"
                />
                <input
                  type="number"
                  class="form-control input-custom"
                  placeholder="Phone"
                  required
                  name="pnumber"
                />
                <input
                  type="email"
                  class="form-control input-custom"
                  placeholder="Email"
                  required
                  name="email"
                />
                <input
                  type="text"
                  class="form-control input-custom"
                  placeholder="Type your skill..."
                  required
                  name="skill"
                />
                <input
                  type="number"
                  min="0"
                  max="100"
                  class="form-control input-custom"
                  placeholder="Insert you skill with percent '%'"
                  name="widthx"
                />
                <input
                  type="text"
                  class="form-control input-custom"
                  placeholder="Language"
                  required
                  name="language"
                />
                <input
                  type="number"
                  min="0"
                  max="100"
                  class="form-control input-custom"
                  placeholder="Insert your language skill with percent '%'"
                  name="widthy"
                />
                <div class="textarea mt-3">
                  <textarea
                    id="my-text-box"
                    rows="5"
                    cols="30"
                    type="text"
                    class="form-control input-custom"
                    placeholder="Type your biography"
                    name="biography"
                    required
                  ></textarea>
                  <span class="ps-4" id="word-count">0</span
                  ><span>/100 words</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-outline">
                <h3>Experience</h3>
                <div class="field">
                  <div class="d-flex w-100 justify-content-between">
                    <div class="d-flex align-items-center">
                      <input
                        id="ex"
                        type="date"
                        class="w-50 form-control input-custom"
                        required
                        name="expStart"
                      />
                      <label for="ex">Start Date</label>
                    </div>
                    <div class="d-flex align-items-center">
                      <input
                        id="ey"
                        type="date"
                        class="w-50 form-control input-custom"
                        required
                        name="expEnd"
                      />
                      <label for="ey">End Date</label>
                    </div>
                  </div>
                  <input
                    type="text"
                    class="form-control input-custom"
                    placeholder="Company Name"
                    required
                    name="compname"
                  />
                  <input
                    type="text"
                    class="form-control input-custom"
                    placeholder="Company Location"
                    required
                    name="comploc"
                  />
                  <input
                    type="text"
                    class="form-control input-custom"
                    placeholder="Job Position"
                    required
                    name="comjob"
                  />
                </div>

                <h3 class="p-2">Education</h3>
                <div class="field">
                  <div
                    class="d-flex justify-content-start align-items-center w-100"
                  >
                    <input
                      id="gd"
                      type="date"
                      class="w-50 form-control input-custom"
                      required
                      name="eduGraduation"
                    />
                    <label for="gd">Graduation Date</label>
                  </div>
                  <input
                    type="text"
                    class="form-control input-custom"
                    placeholder="Degree Name"
                    required
                    name="degname"
                  />
                  <input
                    type="text"
                    class="form-control input-custom"
                    placeholder="Name of School"
                    required
                    name="nameSchool"
                  />
                </div>
                <h3 class="p-2">Certificates</h3>
                <div class="field">
                  <div
                    class="d-flex justify-content-start align-items-center w-100"
                  >
                    <input
                      id="cd"
                      type="date"
                      class="w-50 form-control input-custom"
                      required
                      name="certdate"
                    />
                    <label for="cd">Certification Date</label>
                  </div>
                  <input
                    type="text"
                    class="form-control input-custom"
                    placeholder="Title of Certificate"
                    required
                    name="certTitle"
                  />
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-center align-items-center p-3">
              <button
                class="btn btn-primary w-25"
                type="submit"
                id="submit-button"
              >
                N E X T
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- Footer -->
    <?php
      include "include/footer.php";
    ?>
    <!-- Footer -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script>
      // JavaScript to add/remove scrolling class
      window.addEventListener("scroll", function () {
        const navbar = document.querySelector(".navbar");
        if (window.scrollY > 0) {
          navbar.classList.remove("navbar-transparent");
          navbar.classList.add("navbar-scrolled");
        } else {
          navbar.classList.remove("navbar-scrolled");
          navbar.classList.add("navbar-transparent");
        }
      });

      function scrollDown() {
        window.scrollBy({
          top: window.innerHeight,
          behavior: "smooth",
        });
      }

      function scrollUp() {
        window.scrollBy({
          top: -window.innerHeight,
          behavior: "smooth",
        });
      }
    </script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Font awesome -->
    <script
      defer
      src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"
    ></script>
    <script src="../../js/jsCV/cvJs.js"></script>
    <script
      defer
      src="https://use.fontawesome.com/releases/v5.15.1/js/v4-shims.js"
    ></script>
    <script>
      var swiper = new Swiper(".swiper", {
        slidesPerView: 3,
        direction: getDirection(),
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        on: {
          resize: function () {
            swiper.changeDirection(getDirection());
          },
        },
      });

      function getDirection() {
        var windowWidth = window.innerWidth;
        var direction = window.innerWidth <= 760 ? "vertical" : "horizontal";

        return direction;
      }
    </script>

    <!-- text box word count -->
    <script>
      const textBox = document.getElementById("my-text-box");
      const wordCountSpan = document.getElementById("word-count"); // Optional

      textBox.addEventListener("input", () => {
        const text = textBox.value.trim(); // Trim leading/trailing whitespace
        const words = text.split(/\s+/); // Split into words using whitespace separator
        const wordCount = words.length;

        // Update word count display (Optional)
        if (wordCountSpan) {
          wordCountSpan.textContent = `${wordCount}`;
        }

        // Validate and restrict word count
        if (wordCount > 100) {
          // Replace 100 with your desired maximum
          textBox.value = words.slice(0, 100).join(" "); // Limit to first 100 words
          textBox.disabled = true; // Disable typing when limit reached
        } else {
          textBox.disabled = false; // Enable typing when below limit
        }
      });
    </script>
  </body>
</html>
