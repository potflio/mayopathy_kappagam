<!DOCTYPE html>
<?php 
require("class_hospital.php");
$obj=new Hospital();
$id=$_GET['id'];
$staff=$obj->single_display("SELECT * FROM staff WHERE id=$id");
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff Profile</title>
  <?php include 'navbar.php'; ?>
</head>
<body>
  <div class="container mt-5">
    <h2 class="text-center text-primary mb-4">Staff Profile</h2>
    <div class="card shadow p-4">
      <div class="card-body">
        <div class="row">
          <!-- Left side: Staff details -->
          <div class="col-md-8">
            <p><strong>Name: </strong><?php echo $staff['Name']; ?></p>
            <p><strong>Designation: </strong><?php echo $staff['Designation']; ?></p>
            <p><strong>Age: </strong><?php echo $staff['Age']; ?></p>
            <p><strong>Qualification: </strong><?php echo $staff['Qualification']; ?></p>
            <p><strong>Sex: </strong><?php echo $staff['Sex']; ?></p>
            <p><strong>Reference: </strong><?php echo $staff['Reference']; ?></p>
            <p><strong>Address: </strong><?php echo $staff['Address']; ?></p>
          </div>
          <!-- Right side: Image -->
          <div class="col-md-4 d-flex justify-content-end">
                    <img src="<?php echo $staff['Upload_Image']; ?>" alt=" Profile" class="rounded-circle img-fluid mb-3">

          </div>
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>
