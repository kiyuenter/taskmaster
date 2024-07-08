<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include 'include/header.php';
    ?>
</head>
<body>
    <?php
    include 'include/header.php';
    include 'include/navigation.php';
    ?>
    <div class="container-fluid pt-5 pb-5">
    <h2 class="text-center">OUR EXPERTS</h2>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="row w-100">
            <div class="col-md-4 mt-2">
                <div class="card" style="width: 18rem;">
                    <img src="../teacherfiles/profile-photo/teacher-1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="feedback d-flex justify-content-center align-items-center">
                            <i class="bi bi-star-fill text-warning p-1"></i>
                            <i class="bi bi-star-fill text-warning p-1"></i>
                            <i class="bi bi-star-fill text-warning p-1"></i>
                            <i class="bi bi-star-fill text-warning p-1"></i>
                            <i class="bi bi-star-fill text-warning p-1"></i>
                        </div>
                        <h5 class="card-title">Kidus Seleshi</h5>
                        <!-- Rating Form -->
                        <form action="../php/submit_rating.php" method="POST">
                            <input type="hidden" name="teacher_email" value="1">
                            <label for="rating">Rate this teacher:</label>
                            <select name="rating" id="rating">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="../js/loader.js"></script>
</body>
</html>