<!DOCTYPE html>
<html lang="en">
<?php
require("class_hospital.php");
$obj=new Hospital();
$Person_Name=$_GET['Person_Name'];
$patient=$obj->single_display("SELECT * FROM patient WHERE Patient_Name=$Person_Name");	
$room=$obj->single_display("SELECT * FROM room WHERE Person_Name=$Person_Name");
?>
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Payment Voucher</title>
    <?php include 'navbar.php'; ?>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4"><?php echo $_GET['Person_Name']; ?>Room Payment Voucher</h2>
        <div class="row">
            <!-- Form Section -->
            <div class="col-md-6">
                <form action="room_payins.php" method="POST" class="form-container">
                    <div class="mb-3">
     
                       <label for="patientCode" class="form-label">Patient Code:</label>
                      <input type="text" class="form-control" id="patientCode" name="Patient_Code" value='<?php echo $patient['Admission_No']; ?>' readonly>
 <div class="mb-3">
                        <label for="roomno" class="form-label">Room No:</label>
                        <input type="number" class="form-control" id="roomno" name="Room_No"  value='<?php echo $room['Room_No']; ?>' readonly>
                    </div>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="Name" value='<?php echo $patient['Patient_Name']; ?>' readonly>
                    </div>
					 <div class="mb-3">
                        <label for="name" class="form-label">Paid:</label>
                        <input type="text" class="form-control" id="name" name="paid" value='<?php echo $room['paid']; ?>' readonly>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date:</label>
                        <input type="date" class="form-control" name="Date" id="date">
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
                        <label for="Actual_Amount" class="form-label">Actual_Amount(₹):</label>
                        <input type="number" class="form-control" id="amount" name="Actual_Amount" value='<?php echo $room['Amount']*30; ?>' readonly>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
            <!-- Patient Details Section -->
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="card" style="width: 18rem;">
                   <img src="<?php echo $patient['Upload_Image']; ?>" alt="Patient Profile" class="rounded-circle img-fluid mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Name: <?php echo $patient['Patient_Name']; ?></h5>
                        <p class="card-text">Admission No: <?php echo $patient['Admission_No']; ?></p>
                        <p class="card-text">Diagnosis: <?php echo $patient['Diagnosis']; ?></p>
                        <p class="card-text">Date: <?php echo $patient['Consultation_Date']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>