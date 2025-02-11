<!DOCTYPE html>
<html lang="en">
<?php 
require("class_hospital.php");
$obj=new Hospital();
$id=$_GET['id'];
$patient=$obj->single_display("SELECT * FROM patient WHERE id=$id");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Profile</title>
    <?php include 'navbar.php'; ?>
</head>
<body>
<div class="container my-5">
    <h1 class="text-center text-primary mb-4">Patient Profile</h1>
    <div class="row g-4">
        <!-- Left Section -->
        <div class="col-md-4 text-center">
         <img src="<?php echo $patient['Upload_Image']; ?>" alt="Patient Profile" class="rounded-circle img-fluid mb-3">
			<p class="fw-bold text-primary">Patient Profile:</p>
</div>
        <div class="col-md-4">
            <p><span class="fw-bold">Consultation No:</span><?php echo $patient['Consultation_No']; ?></p>
            <p><span class="fw-bold">Patient Name:</span> <?php echo  $patient['Patient_Name']; ?></p>
            <p><span class="fw-bold">Father Name:</span> <?php echo  $patient['Father_Name']; ?></p>
            <p><span class="fw-bold">Patient Date of Birth:</span> <?php echo  $patient['Patient_Date_of_Birth']; ?></p>
            <p><span class="fw-bold">Patient Age:</span> <?php echo  $patient['Patient_Age']; ?></p>
            <p><span class="fw-bold">Communication Address:</span> <?php echo $patient['Communication_Address']; ?></p>
            <p><span class="fw-bold">Mobile Number:</span> <?php echo  $patient['Mobile_Number']; ?></p>
            <p><span class="fw-bold">Alternative Number:</span> <?php echo  $patient['Alternative_Number']; ?></p>
            <p><span class="fw-bold">Email ID:</span> <?php echo  $patient['Email_ID']; ?></p>
        </div>
        <div class="col-md-4">
            <p><span class="fw-bold">Admission No:</span> <?php echo  $patient['Admission_No']; ?></p>
            <p><span class="fw-bold">Consultation Date:</span> <?php echo $patient['Consultation_Date']; ?></p>
            <p><span class="fw-bold">Reference:</span> <?php echo  $patient['Reference']; ?></p>
            <p><span class="fw-bold">Diagnosis:</span><?php echo  $patient['Diagnosis']; ?></p>
            <p><span class="fw-bold">Machine Size:</span> <?php echo  $patient['Machine_Size']; ?></p>
            <p><span class="fw-bold">Chest Belt Size:</span> <?php echo  $patient['Chest_Belt_Size']; ?></p>
            <p><span class="fw-bold">LS Belt Size:</span> <?php echo  $patient['LS_Belt_Size']; ?></p>
        </div>
    </div>
</div>
</body>
</html>
