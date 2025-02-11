<!DOCTYPE html>
<html lang="en">
	
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation Form</title>
    <!-- Ensure Bootstrap is included -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php include 'navbar.php'; ?>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center text-primary mb-4">Consultation Form</h2>
        <form action="consultins.php" method="POST" class="form-container">
            <div class="row g-3">
                <!-- Left Column -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="consultationNo" class="form-label"><b>Consultation No:</b></label>
                        <input type="text" class="form-control" id="consultationNo" name="Consultation_No" required>
                    </div>
                    <div class="mb-3">
                        <label for="patientName" class="form-label"><b>Patient Name:</b></label>
                        <input type="text" class="form-control" id="patientName" name="Patient_Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="fatherName" class="form-label"><b>Father Name:</b></label>
                        <input type="text" class="form-control" id="fatherName" name="Father_Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label"><b>Patient Date of Birth:</b></label>
                        <input type="date" class="form-control" id="dob" name="Patient_Date_of_Birth" required>
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label"><b>Patient Age:</b></label>
                        <input type="number" class="form-control" id="age" name="Patient_Age" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label"><b>Communication Address:</b></label>
                        <textarea class="form-control" id="address" name="Communication_Address" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label"><b>Mobile Number:</b></label>
                        <input type="text" class="form-control" id="mobile" name="Mobile_Number" required pattern="\d{10}">
                    </div>
                    <div class="mb-3">
                        <label for="altMobile" class="form-label"><b>Alternative Number:</b></label>
                        <input type="text" class="form-control" id="altMobile" name="Alternative_Number" pattern="\d{10}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label"><b>Email ID:</b></label>
                        <input type="email" class="form-control" id="email" name="Email_ID" required>
                    </div>
                    <div class="mb-3">
                        <label for="fee" class="form-label"><b>Consultation Fee:</b></label>
                        <input type="text" class="form-control" id="fee" name="Consultation_Fee" required>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="admissionNo" class="form-label"><b>Admission No:</b></label>
                        <input type="text" class="form-control" id="admissionNo" name="Admission_No" required>
                    </div>
                    <div class="mb-3">
                        <label for="consultationDate" class="form-label"><b>Consultation Date:</b></label>
                        <input type="date" class="form-control" id="consultationDate" name="Consultation_Date"required>
                    </div>
                    <div class="mb-3">
                        <label for="reference" class="form-label"><b>Reference:</b></label>
                        <input type="text" class="form-control" id="reference" name="Reference">
                    </div>
                    <div class="mb-3">
                        <label for="diagnosis" class="form-label"><b>Diagnosis:</b></label>
                        <input type="text" class="form-control" id="diagnosis" name="Diagnosis" required>
                    </div>
                    <div class="mb-3">
                        <label for="followup1" class="form-label"><b>Followup Date 1:</b></label>
                        <input type="date" class="form-control" id="followup1" name="Followup_Date_1">
                    </div>
                    <div class="mb-3">
                        <label for="followup2" class="form-label"><b>Followup Date 2:</b></label>
                        <input type="date" class="form-control" id="followup2" name="Followup_Date_2">
                    </div>
                    <div class="mb-3">
                        <label for="followup3" class="form-label"><b>Followup Date 3:</b></label>
                        <input type="date" class="form-control" id="followup3" name="Followup_Date_3">
                    </div>
                    <div class="mb-3">
                        <label for="followup4" class="form-label"><b>Followup Date 4:</b></label>
                        <input type="date" class="form-control" id="followup4" name="Followup_Date_4">
                    </div>
                    <div class="mb-3">
                        <label for="preferredDate" class="form-label"><b>Preferred Admission Date:</b></label>
                        <input type="date" class="form-control" id="preferredDate" name="Preferred_Admission_Date">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><b>Mode of Payment:</b></label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="cash" name="Mode_of_Payment" value="Cash">
                            <label class="form-check-label" for="cash">Cash</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="upi" name="Mode_of_Payment" value="UPI">
                            <label class="form-check-label" for="upi">UPI</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="text-center mt-4">
                <button type="submit" name="insert" class="btn btn-primary px-4 py-2">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
