<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Payment</title>
    <?php include 'navbar.php'; ?>
</head>

<body>

    <div class="container mt-5">
        <!-- Header Section -->
        <h1 class="h4 text-primary text-center">Patient Payment</h1>
        <div class="d-flex justify-content-between align-items-center mb-4">
            <!-- Do not Erase It -->
            <h1></h1>
            <!-- Do not Erase It -->
            <span class="badge bg-success p-2 fs-5">Paid</span>
        </div>

        <!-- Patient Profile Section -->
        <div class="row mb-4">
            <div class="col-md-3 text-center">
                <img src="assets/icons/patient_profile.png" alt="Patient Profile" class="rounded-circle mb-2" style="max-width: 150px; height: auto;">
                <p class="fw-bold mb-0 text-primary">Patient Profile:</p>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Consultation No:</strong> 123456</p>
                        <p><strong>Patient Name:</strong> John Doe</p>
                        <p><strong>Patient Age:</strong> 34 years</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Communication Address:</strong> 123 Maple Street, Greenfield, CA, USA</p>
                        <p><strong>Mobile Number:</strong> +1 987-654-3210</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Payment Table -->
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead class="table-light">
                    <tr>
                        <th>S.No</th>
                        <th>Payment Date</th>
                        <th>Amount Paid (₹)</th>
                        <th>Payment Mode</th>
                        <th>Remarks</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>01-Dec-2024</td>
                        <td>5,000</td>
                        <td>UPI</td>
                        <td>Partial payment</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>10-Dec-2024</td>
                        <td>5,000</td>
                        <td>Net Banking</td>
                        <td>Follow-up payment</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>15-Dec-2024</td>
                        <td>10,000</td>
                        <td>Credit Card</td>
                        <td>Advance payment</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>