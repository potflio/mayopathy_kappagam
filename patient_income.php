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
        <h1 class="text-center mb-4">Patient Income</h1>
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead class="table-light">
                    <tr>
                        <th>ID No</th>
                        <th>Name</th>
                        <th>Actual Fees</th>
                        <th>Reduce</th>
                        <th>Paid On</th>
                        <th>Pay Mode</th>
						<th>Paid Amount</th>
						<th>Balance</th>
						<th>Remarks</th>
                        <th>Status</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
					<td>1</td>
					<td>priya</td>
					<td>10000</td>
					<td>1000</td>
					<td>12.01.2025</td>
					<td>cash</td>
					<td>2000</td>
					<td>7000</td>
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
                        <a href="patient_income_view.php?id=<?php echo $patient['id']; ?>">

						

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
