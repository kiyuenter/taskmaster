<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Taskmaster | Send Evaluation Result</title>
</head>
<body>
   <div class="container-fluid">
    <div class="container">
        <div class="row d-flex align-item-center justify-content-center">
            <form action="../php/verificationSend.php" method="post" class="form-control">
                <input type="text" name="sendto" placeholder="Send to:" class="form-control m-2">
                <input type="text" name="nameofre" placeholder="Name of the recipient" class="form-control m-2">
                <input type="text" name="subject" placeholder="Subject:" class="form-control m-2">
                <textarea type="text" name="body" placeholder="Type your message . . ." class="form-control m-2">
                </textarea>
                <input type="submit" class="btn btn-success m-2">
            </form>
        </div>
    </div>
   </div> 



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
</body>
</html>