<!DOCTYPE html>
<html lang="en">
<?php 
require("class_hospital.php");
$obj = new Hospital();
$id = $_GET['id'];
	//echo "ID: " . $_GET['id'] . "<br>";
$patient = $obj->single_display("SELECT * FROM patient WHERE id=$id");
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
        <div class="d-flex justify-content-between align-items-center mb-4"> 
			<?php
            $amount = ($patient['Monthly_Fees'] * 30) + $patient['Machine'];
                        $paid = $patient['Paid_Monthly'] + $patient['Paid_Machine'];
			 if ($amount == $paid) {
                echo '<span class="badge bg-success p-2 fs-5">Paid</span>';
            } else {
                 echo '<span class="badge bg-success p-2 fs-5">Pending</span>';
            }
			?>
        </div>
        <div class="row mb-4">
            <div class="col-md-3 text-center">
                <img src="<?php echo $patient['Upload_Image']; ?>" alt="Patient Profile" class="rounded-circle img-fluid mb-3">
                <p class="fw-bold mb-0 text-primary">Patient Profile:</p>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Consultation No:</strong> <?php echo $patient['Consultation_No']; ?></p>
                        <p><strong>Patient Name:</strong> <?php echo  $patient['Patient_Name']; ?></p>
                        <p><strong>Patient Age:</strong> <?php echo  $patient['Patient_Age']; ?></p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Communication Address:</strong> <?php echo $patient['Communication_Address']; ?></p>
                        <p><strong>Mobile Number:</strong> <?php echo  $patient['Mobile_Number']; ?></p>
                    </div>
                </div>
            </div>
        </div>
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
                        <td> <?php echo $patient_payment['Patient_Code']; ?> </td>
                        <td> <?php echo $patient_payment['Date']; ?> </td>
                        <td> 
                            <?php 
							$amount = $patient['Monthly_Fees']*30;
                                echo $amount;
                            ?> 
                        </td>
                        <td> 
                            <?php 
                                $paid = $patient['Paid_Monthly'];
                                echo $paid;
                            ?> 
                        </td> 
                        <td> 
                            <?php 
                                $balance = $amount - $paid;
                                echo $balance;
                            ?> 
                        </td> 
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
