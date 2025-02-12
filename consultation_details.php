<!DOCTYPE html>
<?php
require("class_hospital.php");
$obj = new Hospital();
$consultant = $obj->full_display("consultant");
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation Details</title>
    <?php include 'navbar.php'; ?>
    <style>
        .add-button {
            background: linear-gradient(to right, #a18cd1, #fbc2eb);
            border: none;
            color: white;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 20px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }

        .add-button:hover {
            background: linear-gradient(to right, #fbc2eb, #a18cd1);
        }

        .table-icons {
            font-size: 1.2rem;
        }

        /* CSS for fade out effect */
        .fade-out {
            animation: fadeOut 2s forwards;
        }

        @keyframes fadeOut {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="main-content">
        <div class="container my-5">
            <h1 class="text-center text-primary">Consultation Details</h1>

            <!-- Success Payment Alert (Bootstrap) -->
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

            <div class="d-flex justify-content-between align-items-center mb-4">
                <a href="consultation_form.php" class="add-button">+ ADD</a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>S.No</th>
                            <th>Admission No</th>
                            <th>Patient Name</th>
                            <th>Mobile Number</th>
                            <th>Profile</th>
                            <th>Pay</th>
                            <th>Payment</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($consultant as $consultant) {
                        ?>
                            <tr>
                                <td><?php echo $consultant['id']; ?></td>
                                <td><?php echo $consultant['Admission_No']; ?></td>
                                <td><?php echo $consultant['Patient_Name']; ?></td>
                                <td><?php echo $consultant['Mobile_Number']; ?></td>

                                <td class="text-center"><a href="consultator_profile.php?id=<?php echo $consultant['id']; ?>"><span class="table-icons">👤</span></a></td>
                                <td class="text-center"><a href="consultator_payment_voucher.php?id=<?php echo $consultant['id']; ?>"><span class="table-icons">💲</span></a></td>
                                <td>Paid</td>
                                <td><?php echo $consultant['status']; ?></td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>



</body>

</html>