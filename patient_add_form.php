<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <?php include 'navbar.php'; ?>
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center text-primary mb-4"><u>Admission Form</u></h1>
        <form>
            <!-- Personal Information -->
            <h4 class="mt-4 text-primary"><u>Personal Information</u></h4>
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="consultationNo" class="form-label"><b>Consultation No</b></label>
                    <input type="text" class="form-control" id="consultationNo" name="consultation_no">
                </div>
                <div class="col-md-6">
                    <label for="admissionNo" class="form-label"><b>Admission No</b></label>
                    <input type="text" class="form-control" id="admissionNo" name="admission_no">
                </div>
                <div class="col-md-6">
                    <label for="patientName" class="form-label"><b>Patient Name</b></label>
                    <input type="text" class="form-control" id="patientName" name="patient_name">
                </div>
                <div class="col-md-6">
                    <label for="consultationDate" class="form-label"><b>Consultation Date</b></label>
                    <input type="date" class="form-control" id="consultationDate" name="consultation_date">
                </div>
                <div class="col-md-6">
                    <label for="uploadImage" class="form-label"><b>Upload Image</b></label>
                    <input type="file" class="form-control" id="uploadImage" name="upload_image">
                </div>
                <div class="col-md-6">
                    <label for="reference" class="form-label"><b>Reference</b></label>
                    <input type="text" class="form-control" id="reference" name="reference">
                </div>
                <div class="col-md-6">
                    <label for="fatherName" class="form-label"><b>Father Name</b></label>
                    <input type="text" class="form-control" id="fatherName" name="father_name">
                </div>
                <div class="col-md-6">
                    <label for="diagnosis" class="form-label"><b>Diagnosis</b></label>
                    <input type="text" class="form-control" id="diagnosis" name="diagnosis">
                </div>
                <div class="col-md-6">
                    <label for="machineSize" class="form-label"><b>Machine Size</b></label>
                    <input type="email" class="form-control" id="machineSize" name="machineSize">
                </div>
                <div class="col-md-6">
                    <label for="chestBeltSize" class="form-label"><b>Chest Belt Size</b></label>
                    <input type="email" class="form-control" id="chestBeltSize" name="chestBeltSize">
                </div>
                <div class="col-md-6">
                    <label for="lsBeltSize" class="form-label"><b>LS Belt Size</b></label>
                    <input type="email" class="form-control" id="lsBeltSize" name="lsBeltSize">
                </div>
                <div class="col-md-6">
                    <label for="dob" class="form-label"><b>Date of Birth</b></label>
                    <input type="date" class="form-control" id="dob" name="dob">
                </div>
                <div class="col-md-6">
                    <label for="age" class="form-label"><b>Age</b></label>
                    <input type="number" class="form-control" id="age" name="age">
                </div>
                <div class="col-12">
                    <label for="address" class="form-label"><b>Communication Address</b></label>
                    <textarea type="text" class="form-control" id="address" name="address"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="mobile" class="form-label"><b>Mobile Number</b></label>
                    <input type="text" class="form-control" id="mobile" name="mobile">
                </div>
                <div class="col-md-6">
                    <label for="altMobile" class="form-label"><b>Alternative Number</b></label>
                    <input type="text" class="form-control" id="altMobile" name="alt_mobile">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label"><b>Email ID</b></label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>

            </div>

            <!-- Documents -->
            <h4 class="mt-4 text-primary"><u>Documents Required</u></h4>
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="aadhar" class="form-label"><b>Aadhar Number</b></label>
                    <input type="text" class="form-control" id="aadhar" name="aadhar">
                </div>
                <div class="col-md-6">
                    <label for="smartCard" class="form-label"><b>Smart Card Number</b></label>
                    <input type="text" class="form-control" id="smartCard" name="smart_card">
                </div>
                <div class="col-md-6">
                    <label for="disabilityCard" class="form-label"><b>Disability Card Number</b></label>
                    <input type="text" class="form-control" id="disabilityCard" name="disability_card">
                </div>
                <div class="col-md-6">
                    <label for="udid" class="form-label"><b>UDID Card Number</b></label>
                    <input type="text" class="form-control" id="udid" name="udid">
                </div>
            </div>

            <!-- Treatment Person Allocation -->
            <h4 class="mt-4 text-primary"><u>Treatment Person Allocation</u></h4>
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="physiotherapist" class="form-label"><b>Physiotherapist Name</b></label>
                    <input type="text" class="form-control" id="physiotherapist" name="physiotherapist">
                </div>
                <div class="col-md-6">
                    <label for="trainer" class="form-label"><b>Trainer Name</b></label>
                    <input type="text" class="form-control" id="trainer" name="trainer">
                </div>
                <div class="col-md-6">
                    <label for="kattuPerson" class="form-label"><b>Kattu Person Name</b></label>
                    <input type="text" class="form-control" id="kattuPerson" name="kattu_person">
                </div>
            </div>

            <!-- Monthly & Tariff -->
            <h4 class="mt-4 text-primary"><u>Monthly</u></h4>
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="monthlyFees" class="form-label"><b>Monthly Fees</b></label>
                    <input type="text" class="form-control" id="monthlyFees" name="monthly_fees">
                </div>
            </div>
            <h4 class="mt-4 text-primary"><u>Tariff Proposal</u></h4>
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="fees" class="form-label"><b>Fees</b></label>
                    <input type="text" class="form-control" id="fees" name="fees">
                </div>
                <div class="col-md-6">
                    <label for="machine" class="form-label"><b>Machine</b></label>
                    <input type="text" class="form-control" id="machine" name="machine">
                </div>
                <div class="col-md-6">
                    <label for="belt" class="form-label"><b>Belt</b></label>
                    <input type="text" class="form-control" id="belt" name="belt">
                </div>
                <div class="col-md-6">
                    <label for="fileAmount" class="form-label"><b>File Amount</b></label>
                    <input type="text" class="form-control" id="fileAmount" name="file_amount">
                </div>
                <div class="col-md-6">
                    <label for="paidAmount" class="form-label"><b>Paid Amount</b></label>
                    <input type="text" class="form-control" id="paidAmount" name="paid_amount">
                </div>
            </div>
            <div class="row g-3 mt-3">
                <div class="col-md-6">
                    <label class="form-label"><b>Mode of Payment</b></label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="cash" name="payment_mode" value="cash">
                        <label class="form-check-label" for="cash">Cash</b></label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="upi" name="payment_mode" value="upi">
                        <label class="form-check-label" for="upi">UPI</b></label>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
