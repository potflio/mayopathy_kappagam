<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff Form</title>
  <?php include 'navbar.php'; ?>
</head>
<body>
  <div class="container mt-5">
    <h2 class="text-center text-primary mb-4">Staff Form</h2>
    <div class="row justify-content-center">
      <!-- Form Section -->
      <div class="col-md-6">
        <form>
          <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Name">
          </div>
          <div class="mb-3">
            <label for="designation" class="form-label">Designation:</label>
            <input type="text" class="form-control" id="designation" placeholder="Enter Designation">
          </div>
          <div class="mb-3">
            <label for="age" class="form-label">Age:</label>
            <input type="number" class="form-control" id="age" placeholder="Enter Age">
          </div>
          <div class="mb-3">
            <label for="qualification" class="form-label">Qualification:</label>
            <input type="text" class="form-control" id="qualification" placeholder="Enter Qualification">
          </div>
          <div class="mb-3">
            <label for="sex" class="form-label">Sex:</label>
            <input type="text" class="form-control" id="sex" placeholder="Enter Sex">
          </div>
          <div class="mb-3">
            <label for="reference" class="form-label">Reference:</label>
            <input type="text" class="form-control" id="reference" placeholder="Enter Reference">
          </div>
          <div class="mb-3">
            <label for="address" class="form-label">Address:</label>
            <textarea class="form-control" id="address" rows="3" placeholder="Enter Address"></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
      </div>
    </div>
  </div>

  
</body>
</html>
