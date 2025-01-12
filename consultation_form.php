<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation Form</title>
    <?php include 'navbar.php'; ?>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center text-primary mb-4">Consultation Form</h2>
        <form>
            <div class="row g-3">
                <!-- Left Column -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="consultationNo" class="form-label"><b>Consultation No:</b></label>
                        <input type="text" class="form-control" id="consultationNo">
                    </div>
                    <div class="mb-3">
                        <label for="patientName" class="form-label"><b>Patient Name:</b></label>
                        <input type="text" class="form-control" id="patientName">
                    </div>
                    <div class="mb-3">
                        <label for="fatherName" class="form-label"><b>Father Name:</b></label>
                        <input type="text" class="form-control" id="fatherName">
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label"><b>Patient Date of Birth:</b></label>
                        <input type="date" class="form-control" id="dob">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label"><b>Patient Age:</b></label>
                        <input type="number" class="form-control" id="age">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label"><b>Communication Address:</b></label>
                        <textarea class="form-control" id="address" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label"><b>Mobile Number:</b></label>
                        <input type="text" class="form-control" id="mobile">
                    </div>
                    <div class="mb-3">
                        <label for="altMobile" class="form-label"><b>Alternative Number:</b></label>
                        <input type="text" class="form-control" id="altMobile">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label"><b>Email ID:</b></label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="fee" class="form-label"><b>Consultation Fee:</b></label>
                        <input type="text" class="form-control" id="fee">
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="admissionNo" class="form-label"><b>Admission No:</b></label>
                        <input type="text" class="form-control" id="admissionNo">
                    </div>
                    <div class="mb-3">
                        <label for="consultationDate" class="form-label"><b>Consultation Date:</b></label>
                        <input type="date" class="form-control" id="consultationDate">
                    </div>
                    <div class="mb-3">
                        <label for="reference" class="form-label"><b>Reference:</b></label>
                        <input type="text" class="form-control" id="reference">
                    </div>
                    <div class="mb-3">
                        <label for="diagnosis" class="form-label"><b>Diagnosis:</b></label>
                        <input type="text" class="form-control" id="diagnosis">
                    </div>
                    <div class="mb-3">
                        <label for="followup1" class="form-label"><b>Followup Date 1:</b></label>
                        <input type="date" class="form-control" id="followup1">
                    </div>
                    <div class="mb-3">
                        <label for="followup2" class="form-label"><b>Followup Date 2:</b></label>
                        <input type="date" class="form-control" id="followup2">
                    </div>
                    <div class="mb-3">
                        <label for="followup3" class="form-label"><b>Followup Date 3:</b></label>
                        <input type="date" class="form-control" id="followup3">
                    </div>
                    <div class="mb-3">
                        <label for="followup4" class="form-label"><b>Followup Date 4:</b></label>
                        <input type="date" class="form-control" id="followup4">
                    </div>
                    <div class="mb-3">
                        <label for="preferredDate" class="form-label"><b>Preferred Admission Date:</b></label>
                        <input type="date" class="form-control" id="preferredDate">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><b>Mode of Payment:</b></label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="cash">
                            <label class="form-check-label" for="cash">Cash</b></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="upi">
                            <label class="form-check-label" for="upi">UPI</b></label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary px-4 py-2">Submit</button>
            </div>
        </form>
    </div>

    
</body>
</html>
