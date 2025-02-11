<!DOCTYPE html>
<?php 
require("class_hospital.php");
$obj = new Hospital();
$patients = $obj->full_display("patient");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fee Table</title>
    <?php include 'navbar.php'; ?>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Fee</h1>
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead class="table-light">
                    <tr>
                        <th>Admission_No</th>
                        <th>Patient_Name</th>
                        <th>Diagnosis</th>
                        <th>Amount</th>
                        <th>Paid</th>
                        <th>Balance</th>
                        <th>Status</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($patients as $patient) {
                       $amount = ($patient['Monthly_Fees'] * 30) + $patient['Machine'];
                        $paid = $patient['Paid_Monthly'] + $patient['Paid_Machine'];
                        $balance = $amount - $paid;
                    ?>
                    <tr>
                        <td><?php echo $patient['id']; ?></td>
                        <td><?php echo $patient['Patient_Name']; ?></td>
                        <td><?php echo $patient['Diagnosis']; ?></td>
                        <td><?php echo $amount; ?></td>
                        <td><?php echo $paid; ?></td>
                        <td><?php echo $balance; ?></td>
                        <td>
                            <?php
                            if ($balance == 0) {
                                echo '<span style="color: green;">Paid</span>';
                            } else {
                                echo '<span style="color: red;">Pending</span>';
                            }
                            ?>
                        </td>
                        <td class="text-success">
                        <a href="patient_payment.php?id=<?php echo $patient['id']; ?>">

						

                                <img class="img-fluid rounded-circle" style="max-width: 50px;" src="assets/icons/patient_profile.png" alt="Profile">
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
