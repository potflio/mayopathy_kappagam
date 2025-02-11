<!DOCTYPE html>
<html lang="en">
<?php
require("class_hospital.php");
$obj = new Hospital();

// Use $_GET['Admission_No'] to get Patient_Code from the URL
$Patient_Code = $_GET['Admission_No'];

// Query to fetch the payment details for the given Patient_Code
$patient_payment = $obj->single_display("SELECT * FROM patient_payment WHERE Patient_Code=$Patient_Code");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Payment</title>
    <?php include 'navbar.php'; ?>
</head>
<body>
    <div class="container mt-5">
        <h1 class="h4 text-primary text-center">Patient Payment</h1>
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead class="table-light">
                    <tr>
                        <th>S.No</th>
                        <th>Month</th>
                        <th>Amount(₹)</th>
                        <th>Paid</th>
                        <th>Balance</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <!-- Display the fetched values from $patient_payment -->
                        <td> <?php echo $patient_payment['Patient_Code']; ?> </td>
                        <td> <?php echo $patient_payment['Date']; ?> </td>
                        <td> <?php echo $patient_payment['Amount']; ?> </td>
                        <td> <?php echo $patient_payment['Paid']; ?> </td>
                        <td> <?php echo $patient_payment['Balance']; ?> </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
