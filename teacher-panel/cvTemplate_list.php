<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/styles.css"/>
        <link rel="stylesheet" href="../css/cvTemplate.css">
        <link rel="icon" href="../photo/logo.png">
        <!-- Font icon -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <link rel="stylesheet" href="css/dashboard.css" />
        <title>CV Maker | Taskmaster</title>
    </head>
<body>
<div class="d-flex" id="wrapper">
    <div id="page-content-wrapper">
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
            <a id="cvt" href="../Cv-Template/cvPage/teacher/jhonCv.html" class="btn btn-primary">Explore</a>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>
</html>