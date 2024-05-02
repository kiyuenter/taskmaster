<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TMAH | Attachment</title>
    <link rel="icon" href="photo/logo.png">
    <link rel="stylesheet" href="css/attachment.css">
    <link rel="stylesheet" href="css/accountType.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    
    <div class="container">
        <div class="attach">
            <?php
                $username = $_SESSION['email'];
                $department = $_SESSION['department'];
                $academic = $_SESSION['academic'];
            ?>
            <h1>Please upload listed documents</h1>
            <form action="php/teacherDoc.php" method="POST" enctype="multipart/form-data">

                <input type="text" name="username" value="<?php echo $username?>"/>
                <input type="text" name="depart" value="<?php echo $department?>"/>
                <input type="text" name="aca" value="<?php echo $academic?>"/>
                <ul>

                <p class="text-center">Your profile picture is must be your photo</p>
                    <li>
                        <input type="file" id="photoInput" accept="image/*" required name="pp" onchange="updateFileName(this)">
                        <i class="bi bi-file-earmark-arrow-up"></i>
                        <label for="photoInput">Profile Picture</label>
                    </li>
                    <li>
                        <input type="file" id="uploadDoc" required name="EDd" onchange="updateFileName(this)">
                        <i class="bi bi-file-earmark-arrow-up"></i>
                        <label for="uploadDoc">Educational Document</label>
                    </li>
                    <li>
                        <input type="file" id="uploadCV" required name="CRv" onchange="updateFileName(this)">
                        <i class="bi bi-file-earmark-arrow-up"></i>
                        <label for="uploadCV">CV</label>                    
                    </li>
                </ul>
                <button class="button" type="submit">SUBMIT</button>
            </form>
        </div>
    </div>
    
    <script>
        window.onload = function() {
            var status = "<?php echo isset($_SESSION['status']) ? $_SESSION['status'] : '' ?>";
            if (status !== "") {
                alert(status);
                <?php if (isset($_SESSION['status'])) unset($_SESSION['status']); ?>
            }
        };

        function updateFileName(input) {
            var fileName = input.files[0].name;
            var label = input.parentElement.querySelector("label");
            label.textContent = fileName;
        }
    </script>
    <script>
        const photoInput = document.getElementById('photoInput');

        photoInput.addEventListener('change', (event) => {
            const file = event.target.files[0];

            if (!file.type.startsWith('image/')) {
                alert("Please select a photo file (jpg, jpeg, png)");
                photoInput.value = "";
                return;
            }
        });

    </script>
</body>
</html>
