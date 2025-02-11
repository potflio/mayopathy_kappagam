<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Payment</title>
    <?php include 'navbar.php'; ?>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center text-success mb-4">Vendor Payment</h2>
        <form action="vendor_payins.php" method="POST" class="form-container">
            <!-- Row 1: Name and Date -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" id="name" name="Name"class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="date" class="form-label">Date:</label>
                    <input type="date" id="date" name="Date"class="form-control">
                </div>
            </div>
            
            <!-- Row 2: Purpose and Department -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="purpose" class="form-label">Propose of:</label>
                    <input type="text" id="purpose" name="Propose_of"class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="department" class="form-label">Department:</label>
                    <input type="text" id="department"  name="Department"class="form-control">
                </div>
            </div>
            
            <!-- Row 3: In Words -->
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="inWords" class="form-label">In Words:</label>
                    <input type="text" id="inWords" name="In_Words"class="form-control">
                </div>
            </div>
            
            <!-- Row 4: Amount and Payment Type -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="amount" class="form-label">Amount(₹):</label>
                    <input type="number" id="amount" name="Amount"class="form-control">
                </div>
                
					  <div class="col-md-6">
                        <label for="paymentMode" class="form-label">Payment Mode:</label>
                        <select class="form-control" id="paymentMode" name="Payment_Mode">
							<option>Bank-UPI</option>
							<option>Cash</option>	
							<option>ICICI Bank </option>
							<option>MD</option>
							<option>Indian Bank</option>
						</select>
                  </div>
				
					 <div class="row mb-4">
						 <div class="col-md-6">
                        <label for="amount" class="form-label">Actual_Amount(₹):</label>
                        <input type="number" class="form-control" id="amount" name="Actual_Amount" readonly>
                    </div>
				</div>
			</div>
            
            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg">
                    PAY NOW <i class="bi bi-currency-dollar"></i>
                </button>
            </div>
        </form>
    </div>

    
</body>
</html>
