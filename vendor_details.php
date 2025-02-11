<!DOCTYPE html>
<html lang="en">
<?php 
require("class_hospital.php");
$obj=new Hospital();
$vendor=$obj->full_display("vendor");
?>	
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayopathy Kappagam - Patient Details</title>

</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container">
        <h2 class="text-center text-success mt-4">Vendor Details</h2>
		 <?php
        // Check if payment_success query parameter is present
        if (isset($_GET['payment_success']) && $_GET['payment_success'] == 'true') {
            echo '<div id="paymentAlert" class="alert alert-success alert-dismissible fade-out show" role="alert">
                    <strong>Payment Successful!</strong> The payment was successfully processed.
                </div>';
        }
        ?>
		 <?php
        // Check if payment_success query parameter is present
        if (isset($_GET['patient_success']) && $_GET['patient_success'] == 'true') {
            echo '<div id="patientAlert" class="alert alert-success alert-dismissible fade-out show" role="alert">
                    <strong>Patient Added Successful!</strong> The patient was successfully added.
                </div>';
        }
        ?>
        <div class="text-end mb-3">
            <a href="vendor_add_form.php" class="btn btn-primary">+ADD NEW</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle text-center">
                <thead class="table-success">
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Bill Date</th>
                        <th scope="col">Vendor Name</th>
                        <th scope="col">Mobile Number</th>
                        <th scope="col">Bill Amount</th>
                        <th scope="col">View</th>
                        <th scope="col">Payment</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
					 <?php 
				$C=1;
                foreach($vendor as $vendor){
                  ?>  
                    <tr>
						<th scope="row"><?php echo $C++; ?></th>
						<td><?php echo $vendor['Bill_Date']; ?></td>
						<td><?php echo $vendor['Vendor_Name']; ?></td>
						<td><?php echo $vendor['Mobile_Number']; ?></td>
						<td><?php echo $vendor['Price']; ?></td>
						
                       <td>
						   
                            <a href="vendor_view.php?id='<?php echo $vendor['id'];?>'">
                                <img class="img-fluid rounded-circle" style="max-width: 50px;" src="assets/icons/vision.png" alt="Profile">
                            </a>
                        </td>
                        <td>
                            <a href="vendor_payment.php?id='<?php echo $vendor['id'];?>'">
                                <img class="img-fluid rounded-circle" style="max-width: 50px;" src="assets/icons/patient_payment.png" alt="Payment">
                            </a>
                        </td>
                        <td><span class="badge bg-warning">Pending</span></td>
                    </tr>
					                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
<script type="text/javascript">
    setTimeout(function() {
        window.location.href = "vendor_details.php";
    }, 4000);
</script>

</body>

</html>