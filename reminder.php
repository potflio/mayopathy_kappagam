<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reminder</title>
    <?php include 'navbar.php'; ?>
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Reminder</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark text-center">
                    <tr>
                        <th>Admission No</th>
                        <th>Patient Name</th>
                        <th>Join Date</th>
                        <th>Patient Payment</th>
                        <th>Amount Paid (Monthly Fee)</th>
                        <th>Remaining Amount (Monthly Fee)</th>
                        <th>Machine Payment</th>
                        <th>Amount Paid (Machine)</th>
                        <th>Remaining Amount (Machine)</th>
                    </tr>
                </thead>
                <?php 
                error_reporting(E_ALL);  // Report all errors
                ini_set('display_errors', 1); 

                require("class_hospital.php");
                $obj = new Hospital();
                $Count = 0;
                $patient = $obj->full_display_qr("SELECT * FROM patient"); 

                foreach ($patient as $patient) {
                    $Admission_No = $patient['Admission_No'];
                    $Join_Date = $patient['Consultation_Date'];
                    $Monthly = $patient['Monthly_Fees'] * 30;  
                    $Jday = date('d', strtotime($Join_Date));
                    $Today_date  = date('Y-m-d');
                    $TMonth = date('m', strtotime($Today_date)); 
                    $patient_payment = $obj->single_display("SELECT SUM(Amount) AS Amount FROM patient_payment WHERE Payment_Desc = 'Monthly_Fee' AND Patient_Code = '$Admission_No' AND DATE_FORMAT(date, '%m') = '$TMonth'"); 
                    if ($patient_payment['Amount'] == null) {
                        $paid_monthly = 0;
                    } else {
                        $paid_monthly = $patient_payment['Amount'];
                    }
                    $patient_machine_payment = $obj->single_display("SELECT SUM(Amount) AS Amount FROM patient_payment WHERE Payment_Desc = 'Machine' AND Patient_Code = '$Admission_No' AND DATE_FORMAT(date, '%m') = '$TMonth'");
                    if ($patient_machine_payment['Amount'] == null) {
                        $paid_machine = 0; // No payment for the machine
                    } else {
                        $paid_machine = $patient_machine_payment['Amount'];
                    }
                    $remaining_monthly = $Monthly - $paid_monthly;
                    $remaining_machine = $patient['Machine'] - $paid_machine;
                    if ($remaining_monthly > 0 || $remaining_machine > 0) {
                        $Count++;  
                        echo '<tbody>';
                        echo '<tr>';
                        echo '<td>' . $Admission_No . '</td>';
                        echo '<td>' . $patient['Patient_Name'] . '</td>';
                        echo '<td>' . date('d-m-Y', strtotime($Join_Date)) . '</td>';
                        echo '<td>' . $Monthly . '</td>';
                        echo '<td>' . $paid_monthly . '</td>';
                        echo '<td>' . $remaining_monthly . '</td>';
                        echo '<td>' . $patient['Machine'] . '</td>';
                        echo '<td>' . $paid_machine . '</td>';
                        echo '<td>' . $remaining_machine . '</td>';
                        echo '</tr>';
                    }
                }

                echo '</tbody>';
                echo '</table>';
                ?>
            </div>
        </div>
    </div>
</body>
</html>