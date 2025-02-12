<!DOCTYPE html>
<?php
require("class_hospital.php");
$obj = new Hospital();
$id = $_GET['id'];
//if (isset($_GET['id'])) {
//$id = (int)$_GET['id'];  
//echo "ID Passed: " . $id;  
//}else{
// die("ID not passed in URL");
//}
$consultant = $obj->single_display("SELECT * FROM consultant WHERE id=$id");
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultater Profile</title>
    <?php include 'navbar.php'; ?>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .profile-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .section-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #495057;
            margin-bottom: 20px;
        }

        .profile-info p {
            margin: 5px 0;
        }

        .profile-info strong {
            color: #343a40;
        }

        .highlight {
            font-weight: bold;
            color: #0d6efd;
        }
    </style>
</head>

<body>
    <div class="main-content">
        <div class="container mt-5">
            <h2 class="text-center text-primary mb-5">Consultater Profile</h2>
            <div class="profile-card mx-auto">
                <div class="row">
                    <!-- Personal Information -->
                    <div class="col-md-6 mb-4">
                        <div class="section-title">Personal Information</div>
                        <div class="profile-info">
                            <p><strong>Consultation No:</strong> <span class="highlight"><?php echo $consultant['Consultation_No']; ?></span></p>
                            <p><strong>Patient Name:</strong><?php echo $consultant['Patient_Name']; ?></p>
                            <p><strong>Father Name:</strong><?php echo $consultant['Father_Name']; ?></p>
                            <p><strong>Date of Birth:</strong><?php echo $consultant['Patient_Date_of_Birth']; ?></p>
                            <p><strong>Age:</strong><?php echo $consultant['Patient_Age']; ?></p>
                            <p><strong>Communication Address:</strong><?php echo $consultant['Communication_Address']; ?></p>
                            <p><strong>Mobile Number:</strong><?php echo $consultant['Mobile_Number']; ?></p>
                            <p><strong>Alternative Number:</strong><?php echo $consultant['Alternative_Number']; ?></p>
                            <p><strong>Email ID:</strong><?php echo $consultant['Email_ID']; ?></p>
                        </div>
                    </div>
                    <!-- Consultation Information -->
                    <div class="col-md-6 mb-4">
                        <div class="section-title">Consultation Information</div>
                        <div class="profile-info">
                            <p><strong>Admission No:</strong> <span class="highlight"><?php echo $consultant['Admission_No']; ?></span></p>
                            <p><strong>Consultation Date:</strong><?php echo $consultant['Consultation_Date']; ?></p>
                            <p><strong>Reference:</strong><?php echo $consultant['Reference']; ?></p>
                            <p><strong>Diagnosis:</strong><?php echo $consultant['Diagnosis']; ?></p>
                            <p><strong>Followup Date 1:</strong><?php echo $consultant['Followup_Date_1']; ?></p>
                            <p><strong>Followup Date 2:</strong><?php echo $consultant['Followup_Date_2']; ?></p>
                            <p><strong>Followup Date 3:</strong><?php echo $consultant['Followup_Date_3']; ?></p>
                            <p><strong>Followup Date 4:</strong><?php echo $consultant['Followup_Date_4']; ?></p>
                            <p><strong>Preferred Admission Date:</strong><?php echo $consultant['Preferred_Admission_Date']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>