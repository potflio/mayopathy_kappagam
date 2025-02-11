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
        <h1 class="text-center mb-4">Machine</h1>
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead class="table-light">
                    <tr>
                        <th>ID No/Branch</th>
                        <th>Name</th>
                        <th>Actual Amount(₹)</th>
                        <th>Paid On</th>
						<th>Paid Mode</th>
						<th>Paid Amount</th>
                        <th>Balance</th>
						<th>Remarks</th>
                        <th>Status</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
					
                    <tr>
						
						<td>1</td>
						<td>raja</td>
						<td>2000</td>
						<td>11.12.2025</td>
						<td>cash</td>
						<td>500</td>
						<td>1500</td>
						<td>lala</td>
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
                        <a href="machine_view.php?id=<?php echo $patient['id']; ?>">

						

                                <img class="img-fluid rounded-circle" style="max-width: 50px;" src="assets/icons/patient_profile.png" alt="Profile">
                            </a>
                        </td>
                    </tr>
                  
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
