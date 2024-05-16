<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resource Uploader</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <style>
    .form-container {
      max-width: 500px;
      margin: auto;
      padding: 30px;
      border-radius: 5px;
      background-color: #f5f5f5;
    }
    .form-label {
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container mt-3">
    <div class="form-container">
      <h1>Resource Uploader</h1>
      <form action="receive-upload-resource.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="coverImage" class="form-label">Cover Image</label><br>
          <input class="form-control" type="file" id="coverImage" name="coverImage" required>
        </div>
        <div class="mb-3">
            <label for="resourceFile" class="form-label">Resource File</label><br>
            <input class="form-control" type="file" id="resourceFile" name="resourceFile" required>
          </div>          
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select class="form-select" id="category" name="category" required>
            <option value="">Select Category</option>
            <option value="book">Book</option>
            <option value="article">Article</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="pageCount" class="form-label">Page Count (if applicable)</label>
          <input type="number" class="form-control" id="pageCount" name="pageCount">
        </div>
        <button type="submit" class="btn btn-primary">Upload Resource</button>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVFQWjxhNBM9T2GUHqrRhnhNXzOs+uNmPW1PJP9ESz4uRDc85VDj" crossorigin="anonymous"></script>
</body>
</html>
