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
    <title>Patient Payment Voucher</title>
    <?php include 'navbar.php'; ?>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Patient Payment Voucher</h2>
        <div class="row">
            <!-- Form Section -->
            <div class="col-md-6">
                <form action="patient_payins.php" method="POST" class="form-container">
                    <div class="mb-3">
                        <label for="patientCode" class="form-label">Patient Code:</label>
                        <input type="text" class="form-control" id="Patient_Code" name="Patient_Code" value='<?php echo $patient['Admission_No']; ?>'readonly>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="Name" value='<?php echo $patient['Patient_Name']; ?>'readonly>
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
                        <label for="amount" class="form-label">Payment Desc:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="Payment_Desc" name="Payment_Desc" value="Monthly_Fee" required>
                <label class="form-check-label" for="Monthly_Fee">Monthly_Fee</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="Payment_Desc" name="Payment_Desc" value="Machine" required>
                <label class="form-check-label" for="Machine">Machine</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="Payment_Desc" name="Payment_Desc" value="Fees" required>
                <label class="form-check-label" for="Fees">Fees</label>
            </div>
					 <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="Payment_Desc" name="Payment_Desc" value="Belt" required>
                <label class="form-check-label" for="Belt">Belt</label>
						<!-- <input type="button" id="calc" value="Calc"><label></label> 
						<label id="">hi </label>  -->

          			  </div>
					</div>
					
					<div class="mb-3">
						<b> <label for="amount" class="form-label" >Actual_Amount(₹):</label></b>
       				  <input type="text" class="form-control" id="Actual_Amount" name="Actual_Amount" readonly> 
                    </div>
					
					<div class="mb-3">
                       <b> <label for="amount" class="form-label" >Paid(₹):</label></b>
       				  <input type="text" class="form-control" id="Paid_Amount" name="Paid_Amount" readonly> 
                    </div>	

                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount(₹):</label>
                        <input type="number" class="form-control" id="amount" name="Amount" placeholder="Enter Amount">
                    </div>					
					
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="card" style="width: 18rem;">
                   <img src="<?php echo $patient['Upload_Image']; ?>" alt="Patient Profile" class="rounded-circle img-fluid mb-3">
                   <div class="card-body">
                        <h5 class="card-title">Name: <?php echo $patient['Patient_Name']; ?></h5>
					   <p class="card-text">Admission No:<span id="Admission_No"><?php echo $patient['Admission_No']; ?></span></p>
                        <p class="card-text">Diagnosis: <?php echo $patient['Diagnosis']; ?></p>
                        <p class="card-text">Date: <?php echo $patient['Consultation_Date']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("input[type='radio']").change(function() {
                 var Admission_No = $("#Admission_No").text();
				// alert("Admission No"+Admission_No);
                 var Payment_Desc = $("input[name='Payment_Desc']:checked").val();
				//alert("payment_desc" +Payment_Desc);
               $.ajax({
                url:"payment_fetch.php",        
                method:"GET",           
                data:{Admission_No:Admission_No,Payment_Desc:Payment_Desc},
                success:function(response){
                    response = JSON.parse(response);
					//alert(response.Actual_Amount);
					$("#Paid_Amount").val(response.Paid_Amount);
					if(Payment_Desc=="Monthly_Fee"){
						$("#Actual_Amount").val((response.Actual_Amount)*30);
					}
					else{
						$("#Actual_Amount").val(response.Actual_Amount);
					}
						$("#amount").focus();
		           
                   //$("#Actual_Amount").val(response.Monthly_Fees);
				},
				//error.function(error){
				
			//}
		});//AJX
				//alert("ajax");
		//alert("delete URL:AJAX");
		//}
            });///click
        });//ready
    </script>