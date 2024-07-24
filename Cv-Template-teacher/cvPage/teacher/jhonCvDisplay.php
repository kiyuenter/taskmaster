<?php
    $fname = $_POST['fullname'];
    $phone = $_POST['pnumber'];
    $email = $_POST['email'];
    $skill = $_POST['skill'];
    $widthx = $_POST['widthx'];
    $lang = $_POST['language'];
    $widthy = $_POST['widthy'];
    $bio = $_POST['biography'];
    $expstart = $_POST['expStart'];
    $expend = $_POST['expEnd'];
    $compname = $_POST['compname'];
    $comploc = $_POST['comploc'];
    $comjob = $_POST['comjob'];
    $edugra = $_POST['eduGraduation'];
    $degname = $_POST['degname'];
    $nameschool = $_POST['nameSchool'];
    $certdate = $_POST['certdate'];
    $certtitle = $_POST['certTitle'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/cvStyle/jhonCvDisplay.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title><?php echo $fname?> CV | Taskmaster</title>
    <style>
        @media print {
            .page {
                page-break-after: always;
                margin: 0 auto;
                padding: 0;
            }

            .dot-print{
                display: none !important;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid bg-dark-subtle d-flex align-items-center justify-content-center dot-print">
            <a href="jhonCv.html" class="btn btn-success m-2">Back</a>
            <button class="btn btn-primary m-2" id="download">Download</button>
    </div>

    <div class="container-fluid bg-primary-subtle d-flex justify-content-center align-items-center py-5">
        <div class="container bg-white page" id="cvdownload">
            <div class="row">
                <div class="col-md-4 first-column">
                    <div>
                        <div class="name py-4 ps-3">
                            <h1 class="text-light"><?php echo $fname?></h1>
                        </div>
                        <div class="personal-info">
                            <div class="title text-light">
                                <h2 class="ps-3 py-2">Personal Info</h2>
                            </div>
                            <div class="content ps-3 text-light py-3">
                                <h5>Phone</h5>
                                <p><?php echo $phone?></p>
                                <h5 class="pt-2">E-mail</h5>
                                <p><?php echo $email?></p>
                            </div>

                            <div class="title text-light my-2">
                                <h2 class="ps-3 py-2">Skills</h2>
                            </div>
                            <div class="content ps-3 text-light my-4">
                                <p><?php echo $skill?></p>
                                <div class="progress me-3 my-2 title" style="height: 10px;" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-white" style="<?php echo "width: ".$widthx."%"; ?>; height: 10px;"></div>
                                </div>
                            </div>

                            <div class="title text-light">
                                <h2 class="ps-3 py-2">Language</h2>
                            </div>
                            <div class="content ps-3 text-light my-4">
                                <p><?php echo $lang?></p>
                                <div class="progress me-3 my-2 title" style="height: 10px;" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-white" style="<?php echo "width: ".$widthy."%"; ?>; height: 10px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 py-4 second-column">
                    <div class="name py-1 ps-3">
                        <h2 class="w-100">Biography</h2>
                        <hr>
                        <div class="content">
                            <p style="text-align: justify;"><?php echo $bio?></p>
                        </div>
                    </div>
                    <div class="name py-1 ps-3">
                        <hr>
                        <h2 class="w-100">Experience</h2>
                        <hr>
                        <div class="content">
                            <div class="row">
                                <div class="col-md-3">
                                    <p><?php echo $expstart?> <span>/</span> <?php echo $expend?></p>
                                </div>
                                <div class="col md-9">
                                    <h4><?php echo $comjob?></h4>
                                    <h5>Company Name: <span style="font-size: 16px; font-weight: 400;"><?php echo $compname?></span></h5>
                                    <p style="margin-top: -10px; font-size: 14px;"><?php echo $comploc?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="name py-1 ps-3">
                        <hr>
                        <h2 class="w-100">Education</h2>
                        <hr>
                        <div class="content">
                            <div class="row">
                                <div class="col-md-3">
                                    <p><?php echo $edugra?></p>
                                </div>
                                <div class="col md-9">
                                    <h4><?php echo $degname?></h4>
                                    <h5>School: <span style="font-size: 16px; font-weight: 400;"><?php echo $nameschool?></span></h5> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="name py-1 ps-3">
                        <hr>
                        <h2 class="w-100">Certificates</h2>
                        <hr>
                        <div class="content">
                            <div class="row">
                                <div class="col-md-3">
                                    <p><?php echo $certdate?></p>
                                </div>
                                <div class="col md-9">
                                    <p><?php echo $certtitle?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Download document -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.0.0-rc.5/html2canvas.min.js"></script>
  <script>
    window.onload = function(){
        document.getElementById("download")
        .addEventListener("click",()=>{
            const cvdownload = this.document.getElementById("cvdownload");
            console.log(cvdownload);
            console.log(window);
            html2pdf().from(cvdownload).save();
        })
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>