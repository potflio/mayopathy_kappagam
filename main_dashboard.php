<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php include 'navbar.php'; ?>
</head>
<style>
    .img-fluid {
        height: 2cm;
        width: 2cm;
    }


    /* Adjust grid for mobile */
    @media (max-width: 767px) {
        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 5px;
        }

        .col {
            flex: 0 0 calc(25% - 10px);
            /* Ensure 4 cards per row */
            max-width: calc(25% - 10px);
        }



        .card {
            max-width: 100%;
            height: 84px;
            /* Adjust height */
            font-size: 12px;
            padding: 8px;
        }

        .img-fluid {
            height: 1cm;
            width: 1cm;
        }

        .card-body {
            padding: 5px;
        }

        .card i {
            font-size: 24px;
            /* Reduce icon size */
        }

        .card h5 {
            font-size: 6px;
        }

        .card p {
            font-size: 8px;
        }
    }
</style>

<body class="bg-light">
    <div class="container">
        <!-- Header -->
        <header class="header d-flex align-items-center mb-5 p-3 bg-primary shadow-sm rounded">
            <img src="assets/images/fav.png" alt="Logo" class="me-3" style="width: 50px; height: 50px;">
            <div>
                <h4 class="m-0 text-white">Good Morning</h4>
                <h2 class="m-0 text-white fw-bold">Dr. Ramasamy</h2>
            </div>
        </header>

        <!-- Dashboard Content -->
        <div class="container">
            <div class="row row-cols-1 row-cols-md-6 g-4">
                <div class="col">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-person-lines-fill display-4 text-primary"></i>
                            <h5 class="mt-2">Consultation</h5>
                            <p class="m-0"><?php echo $consultant_count['id']; ?>
                                <a href="consultation_details.php" class="stretched-link"></a>
                        </div>

                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col">
                    <div class="card text-center shadow-sm"><?php if ($Count_Monthly > 0) { ?>
                            <div class="notification-badge">
                                <?php echo $Count_Monthly; ?>
                            </div> <?php } ?>
                        <div class="card-body">
                            <i class="bi bi-people-fill display-4 text-success"></i>
                            <h5 class="mt-2">Monthly Payment</h5>
                            <p class="m-0"><?php echo  $patient_count['id'] - $Count_Monthly; ?>/<?php echo $patient_count['id']; ?>
                            </p>
                        </div>

                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-basket-fill display-4 text-warning"></i>
                            <h5 class="mt-2">Vendors</h5>
                            <p class="m-0"><?php echo $vendor_count['vendor_count']; ?>
                                <a href="vendor_details.php" class="stretched-link"></a>
                            </p>
                        </div>

                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-building display-4 text-danger"></i>
                            <h5 class="mt-2">Total Rooms</h5>
                            <p class="m-0"><?php echo $room['room']; ?>/<?php echo $total_rooms['total_rooms']; ?>
                                <a href="room_details.php" class="stretched-link"></a>
                            </p>
                        </div>

                    </div>
                </div>
                <!-- Card 5 -->
                <div class="col">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-person-workspace display-4 text-danger"></i>
                            <h5 class="mt-2"> Total Staff</h5>
                            <p class="m-0">10</p>
                            <a href="staff_details.php" class="stretched-link"></a>
                        </div>

                    </div>
                </div>
                <!-- Card 6 -->
                <div class="col">
                    <div class="card text-center shadow-sm"><?php if ($Count_Machine > 0) { ?>
                            <div class="notification-badge">
                                <?php echo $Count_Machine; ?>
                            </div> <?php } ?>
                        <div class="card-body">
                            <i class="bi bi-cash d-none d-lg-inline display-4 text-warning"></i> <!-- <i class="bi bi-cash-coin"></i> -->
                            <h5 class="mt-2">Machine Payment</h5>
                            <p class="m-0"><?php echo $patient_count['id'] - $Count_Machine; ?>/<?php echo $patient_count['id']; ?></p>
                        </div>

                    </div>
                </div>
                <!-- Card 7 -->
                <div class="col">
                    <div class="card text-center shadow-sm">

                        <div class="card-body">
                            <i class="bi bi-coin display-4 text-warning"></i>
                            <h5 class="mt-2">Expense</h5>
                            <p class="m-0"><?php echo $total; ?>
                                <a href="expense.php" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <!-- Card 8 
            <div class="col">
                <div class="card">
					 <div class="notification-badge">
            8
        </div>
                    <i class="bi bi-bell-fill"></i>
                    <h5 class="mt-2">Reminders</h5>
					 <a href="reminder.php" class="stretched-link"></a>
                </div>
            </div> -->
                <div class="col">
                    <div class="card text-center shadow-sm"><?php if ($Count_Room_payment > 0) { ?>
                            <div class="notification-badge">
                                <?php echo $Count_Room_payment; ?>
                            </div><?php } ?>
                        <div class="card-body">
                            <i class="bi bi-cash d-none d-lg-inline display-4 text-warning"></i> <!-- <i class="bi bi-cash-coin"></i> -->
                            <h5 class="mt-2">Room Payment</h5>
                            <p class="m-0"><?php echo  $room['room'] - $Count_Room_payment; ?>/<?php echo $room['room']; ?></p>
                            <!-- <a href="room_details.php" class="stretched-link"></a> -->
                        </div>

                    </div>
                </div>

                <!-- Card 9 -->
                <div class="col">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-book display-4 text-info"></i>
                            <a href="daybook.php" class="stretched-link"></a>
                            <h5 class="mt-2">DayBook</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-journal display-4 text-info"></i>
                            <a href="balance_sheet.php" class="stretched-link"></a>
                            <h5 class="mt-2">Balance Sheet</h5>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <img src="assets/icons/icici.png" class="img-fluid" alt="">
                            <a href="icici_bank.php" class="stretched-link"></a>
                            <h5 class="mt-2">ICICI Bank</h5>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <img src="assets/icons/indian_bank.png" alt="" class="img-fluid">
                            <a href="indian_bank.php" class="stretched-link"></a>
                            <h5 class="mt-2">INDIAN Bank</h5>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-person-circle display-4 text-info"></i>
                            <a href="md.php" class="stretched-link"></a>
                            <h5 class="mt-2">MD Expense</h5>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <h3 class="text-center mb-4">Reminder (Today)</h3>
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>S.No</th>
                            <th>Patient Name</th>
                            <th>Due Amount(₹)</th>
                            <th>Due Date</th>
                            <th>Payment Mode</th>
                            <th>Remarks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mr. Ravi Kumar</td>
                            <td>15,000</td>
                            <td>27-Dec-2024</td>
                            <td>Online/UPI</td>
                            <td>Follow-up consultation</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ms. Priya Sharma</td>
                            <td>8,500</td>
                            <td>28-Dec-2024</td>
                            <td>Cash/Card</td>
                            <td>Physiotherapy package</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Mr. Anil Verma</td>
                            <td>12,000</td>
                            <td>29-Dec-2024</td>
                            <td>Online/Net Banking</td>
                            <td>Diagnosis test fees</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center mt-3">
                <nav>
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer mt-5">
        <p class="mb-0">© 2025 User-Friendly Dashboard | Designed by [Your Name]</p>
    </footer>

</body>
<?php
require("class_hospital.php");
$obj = new Hospital();
//$id=$_GET['id'];
$patient_count = $obj->single_display("SELECT COUNT(id) AS id FROM patient");
$consultant_count = $obj->single_display("SELECT COUNT(id) AS id FROM consultant");
$expense_sum = $obj->single_display("SELECT SUM(Amount) AS total_Amount FROM expense");
$vendor_sum = $obj->single_display("SELECT SUM(Amount) AS total_Amount FROM vendor_payment");
$vendor_count = $obj->single_display("SELECT count(Bill_No) AS vendor_count FROM vendor_info");
$room = $obj->single_display("SELECT count(DISTINCT(Room_No))as room from room where Booking_Status='Booked'");
$total_rooms = $obj->single_display("SELECT count(Room_No)as total_rooms from total_rooms");
$total = $expense_sum['total_Amount'] + $vendor_sum['total_Amount'];
$room_payment = $obj->single_display("SELECT COUNT(Patient_Code)as room_payment FROM room WHERE(30*Amount)-paid=0 and Booking_Status='Booked'");
$patient_monthly_pending = $obj->single_display("select count(Admission_No)as patient_monthly_pending  from patient where Paid_Monthly = Monthly_Fees*30");
$patient_machine_pending = $obj->single_display("select count(Admission_No)as patient_machine_pending  from patient where Paid_Machine = Machine");



//===============================================REMINDER [MONTHLY PAYMENT] =====================================
//require("class_hospital.php");
//$obj = new Hospital();
$Count_Monthly = 0;
$patient = $obj->full_display_qr("select * from patient");
foreach ($patient as $patient) {
    $Admission_No = $patient['Admission_No'];
    $Join_Date = $patient['Consultation_Date'];
    $Monthly = $patient['Monthly_Fees'] * 30;
    $Jday = date('d', strtotime($Join_Date));
    $Today_date  = date('Y-m-d');
    $Tday = date('d', strtotime($Today_date));
    $TMonth = date('m', strtotime($Today_date));
    $a1 = "select sum(Amount)as Amount from patient_payment  where Patient_Code = '1' and DATE_FORMAT(date, '%m')='01'  and Payment_Desc='Monthly_Fee''";
    $patient_payment = $obj->single_display("select sum(Amount)as Amount from patient_payment where Patient_Code = '$Admission_No' and DATE_FORMAT(date, '%m')='$TMonth' and Payment_Desc='Monthly_Fee'");
    if ($patient_payment['Amount'] !=  $Monthly) {
        $Count_Monthly++;
    }
}



//===============================================REMINDER [MACHINE PAYMENT] =====================================
//require("class_hospital.php");
//$obj = new Hospital();
$Count_Machine = 0;
$patient = $obj->full_display_qr("select * from patient");
foreach ($patient as $patient) {
    $Admission_No = $patient['Admission_No'];
    $Join_Date = $patient['Consultation_Date'];
    $Machine = $patient['Machine'];
    $Jday = date('d', strtotime($Join_Date));
    $Today_date  = date('Y-m-d');
    $Tday = date('d', strtotime($Today_date));
    $TMonth = date('m', strtotime($Today_date));
    $a1 = "select sum(Amount)as Amount from patient_payment  where Patient_Code = '1' and DATE_FORMAT(date, '%m')='01'  and Payment_Desc='Machine''";
    $patient_payment_machine = $obj->single_display("select sum(Amount)as Amount from patient_payment where Patient_Code = '$Admission_No' and DATE_FORMAT(date, '%m')='$TMonth' and Payment_Desc='Machine'");
    if ($patient_payment_machine['Amount'] !=  $Machine) {
        $Count_Machine++;
    }
}



//===============================================REMINDER [Room PAYMENT] =====================================
//require("class_hospital.php");
//$obj = new Hospital();
$Count_Room_payment = 0;
$room_temp = $obj->full_display_qr("select * from room where Booking_Status='Booked'");
foreach ($room_temp as $room_temp) {
    $Patient_Code = $room_temp['Patient_Code'];
    $Join_Date = $room_temp['Open_Date'];
    $Room_Monthly = $room_temp['Amount'] * 30;
    $Jday = date('d', strtotime($Join_Date));
    $Today_date  = date('Y-m-d');
    $Tday = date('d', strtotime($Today_date));
    $TMonth = date('m', strtotime($Today_date));
    $a1_room = "select sum(Amount)as Amount from room_payment  where Patient_Code = '1' and DATE_FORMAT(Open_Date, '%m')='01' ";
    $Room_Payment = $obj->single_display("select sum(Amount)as Amount from room_payment where Patient_Code = '$Patient_Code' and DATE_FORMAT(date, '%m')='$TMonth'");
    if ($Room_Payment['Amount'] !=  $Room_Monthly) {
        $Count_Room_payment++;
    }
}


?>

</html>