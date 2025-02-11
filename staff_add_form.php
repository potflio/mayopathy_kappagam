<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff Register Form</title>
  <?php include 'navbar.php'; ?>
</head>

<body>
  <div class="container mt-5">
    <h2 class="text-center text-primary mb-4">Staff Register Form</h2>
    <div class="row justify-content-center">
      <!-- Form Section -->
      <div class="col-md-6">
        <form action="staffins_form.php" method="POST" class="form-container" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="Name" placeholder="Enter Name">
          </div>
          <div class="col-md-6">
            <label for="uploadImage" class="form-label">Upload Image</label>
            <input type="file" class="form-control" id="uploadImage" name="Upload_Image">
          </div>
          <div class="mb-3">
            <label for="designation" class="form-label">Designation:</label>
            <input type="text" class="form-control" id="designation" name="Designation" placeholder="Enter Designation">
          </div>
          <div class="mb-3">
            <label for="age" class="form-label">Age:</label>
            <input type="number" class="form-control" id="age" name="Age" placeholder="Enter Age">
          </div>
          <div class="mb-3">
            <label for="qualification" class="form-label">Qualification:</label>
            <input type="text" class="form-control" id="qualification" name="Qualification" placeholder="Enter Qualification">
          </div>
          <div class="mb-3">
            <label for="sex" class="form-label">Sex:</label>
            <input type="text" class="form-control" id="sex" name="Sex" placeholder="Enter Sex">
          </div>
          <div class="mb-3">
            <label for="reference" class="form-label">Reference:</label>
            <input type="text" class="form-control" id="reference" name="Reference" placeholder="Enter Reference">
          </div>
          <div class="mb-3">
            <label for="address" class="form-label">Address:</label>
            <textarea class="form-control" id="address" rows="3" name="Address" placeholder="Enter Address"></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
      </div>
    </div>
  </div>


</body>

</html>