<!DOCTYPE html>
<?php
require("class_hospital.php");
$obj = new Hospital();
$patient = $obj->full_display("patient");
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayopathy Kappagam - Patient Details</title>
</head>

<body>
    <div class="container">
        <?php include 'navbar.php'; ?>
        <h2 class="text-center text-success mt-4">Patient Details</h2>
        <div class="text-end mb-3">
            <a href="patient_add_form.php" class="btn btn-primary">+ADD NEW</a>
        </div>


        <?php
        // Check if payment_success query parameter is present
        if (isset($_GET['payment_success']) && $_GET['payment_success'] == 'true') {
            echo '<div id="paymentAlert" class="alert alert-success alert-dismissible fade-out show" role="alert">
                    <strong>Payment Successful!</strong> The payment was successfully processed.
                </div>';
        }
        ?>

        <?php
        // Check if patient_success query parameter is present
        if (isset($_GET['patient_success']) && $_GET['patient_success'] == 'true') {
            echo '<div id="patientAlert" class="alert alert-success alert-dismissible fade-out show" role="alert">
                    <strong>Patient Added Successfully!</strong> The patient was successfully added.
                </div>';
        }
        ?>
        <div class="row mb-4">
            <div class="col-md-4 col-12 mb-2 mb-md-0">
                <input type="text" id="search" class="form-control" placeholder="Search by name..." oninput="filterTable()">
            </div>
            <div class="col-md-4 col-12 text-md-end text-center">
                <button class="btn btn-danger me-2" onclick="downloadPDF()">Download PDF</button>
                <button class="btn btn-success" onclick="downloadExcel()">Download Excel</button>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle text-center">
                <thead class="table-success">
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Admission No</th>
                        <th scope="col">Patient Name</th>
                        <th scope="col">Mobile Number</th>
                        <th scope="col">Diagnosis</th>
                        <th scope="col">Profile</th>
                        <th scope="col">Payment</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $C = 1;
                    foreach ($patient as $patient) {
                        $amount = ($patient['Monthly_Fees'] * 30) + $patient['Machine'];
                        $paid = $patient['Paid_Monthly'] + $patient['Paid_Machine'];
                    ?>
                        <tr>
                            <th scope="row"><?php echo $C++; ?></th>
                            <td><?php echo $patient['Admission_No']; ?></td>
                            <td><?php echo $patient['Patient_Name']; ?></td>
                            <td><?php echo $patient['Mobile_Number']; ?></td>
                            <td><?php echo $patient['Diagnosis']; ?></td>
                            <td>
                                <a href="patient_profile.php?id=<?php echo $patient['id']; ?>">
                                    <img class="img-fluid rounded-circle" style="max-width: 50px;" src="assets/icons/patient_profile.png" alt="Profile">
                                </a>
                            </td>
                            <td>
                                <a href="patient_payment_voucher.php?id=<?php echo $patient['id']; ?>">
                                    <img class="img-fluid rounded-circle" style="max-width: 50px;" src="assets/icons/patient_payment.png" alt="Payment">
                                </a>
                            </td>
                            <td>
                                <?php
                                if ($amount == $paid) {
                                    echo '<span class="badge bg-success p-2 fs-6">Paid</span>';
                                } else {
                                    echo '<span class="badge bg-danger p-2 fs-6">Pending</span>';
                                }
                                ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>

</body>

</html>