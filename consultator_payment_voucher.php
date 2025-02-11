<!DOCTYPE html>
<html lang="en">
<?php 
require("class_hospital.php");
$obj=new Hospital();
$id=$_GET['id'];
$consultant=$obj->single_display("SELECT * FROM consultant WHERE id=$id");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultator Payment Voucher</title>
    <?php include 'navbar.php'; ?>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Consultator Payment Voucher</h2>
        <div class="row">
            <!-- Form Section -->
            <div class="col-md-6">
                <form action="consultantins_pay.php" method="POST" class="form-container">
                    <div class="mb-3">
                        <label for="consultatorCode" class="form-label">Consultator Code:</label>
                        <input type="text" class="form-control" id="consultatorCode" name="Consultator_Code" value='<?php echo $consultant['Admission_No']; ?>'readonly> 
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="Name" value='<?php echo $consultant['Patient_Name']; ?>'disabled>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date:</label>
                        <input type="date" class="form-control" id="date" name="Date">
                    </div>
                   <div class="mb-3">
                        <label for="paymentMode" class="form-label">Payment Mode:</label>
                        <select class="form-control" id="paymentMode" name="Payment_Mode">
							<option>Bank-UPI</option>
							<option>Cash</option>	
							<option>ICICI Bank</option>
							<option>MD</option>
							<option>Indian Bank</option>
						</select>
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount(₹):</label>
                        <input type="number" class="form-control" id="amount" name="Amount" placeholder="Enter Amount">
                    </div>
					 <div class="mb-3">
                        <label for="amount" class="form-label">Actual_Amount(₹):</label>
                        <input type="number" class="form-control" id="amount" name="Actual_Amount" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>

            <!-- consultator Details Section -->
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="assets/icons/consultator_profile.png" class="card-img-top" alt="consultator Image">
                    <div class="card-body">
                        <h5 class="card-title">Name: <?php echo $consultant['Patient_Name']; ?></h5>
                        <p class="card-text">Admission No: <?php echo $consultant['Admission_No']; ?></p>
                        <p class="card-text">Diagnosis: <?php echo $consultant['Diagnosis']; ?></p>
                        <p class="card-text">Date: <?php echo $consultant['Preferred_Admission_Date']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>