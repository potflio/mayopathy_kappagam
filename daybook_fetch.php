<!DOCTYPE html>
<html lang="en">
<?php
require('class_hospital.php');
$obj = new Hospital();

$dt_from = $_GET['dt_from'];
$dt_to =  $_GET['dt_to'];

$consultant_payment = $obj->full_display_qr("select * from consultant_payment where Date between '$dt_from' and '$dt_to'");
$patient_payment = $obj->full_display_qr("select * from patient_payment where Date between '$dt_from' and '$dt_to'");
$expense = $obj->full_display_qr("select * from expense where Date between '$dt_from' and '$dt_to'");
$vendor_info = $obj->full_display("vendor_info");
$room = $obj->full_display_qr("select * from room where created_at between '$dt_from' and '$dt_to'");
$sum_vendor =  $obj->single_display("select sum(Total_Amount)as sum_vendor from vendor_info");
$sum_expense = $obj->single_display("select sum(Amount)as sum_expense from expense");
$sum_vendor_info = $obj->single_display("select sum(Amount)as sum_vendor from vendor_info");
$sum_consultant_payment = $obj->single_display("select sum(Amount)as sum_consultant_payment from consultant_payment");
$sum_patient_payment =  $obj->single_display("select sum(Amount)as sum_patient_payment from patient_payment");
$sum_room = $obj->single_display("select sum(Amount)as sum_room from sum_room");
$total_paid = $sum_vendor_info['sum_vendor_info'] + $sum_expense['sum_expense'];
$total_received = $sum_consultant_payment['sum_consultant_payment'] + $sum_patient_payment['sum_patient_payment'] + $sum_room['sum_room'];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DayBook</title>
    <?php include 'navbar.php'; ?>
</head>

<body>
    <div class="main-content">
        <div class="container mt-5">
            <!-- Header Section 
        <div class="row">
            <div class="col-4">
               <h6>MAYOPATHY
                    <br> KAPPAGAM</h6>

            </div>
            <div class="col-8 text-end">
                <p>
                    MAYOPATHY KAPPAGAM <br>
                    Tirunelveli – Shencottai Rd,<br>
                    Veeravanallur,<br>
                    Tamil Nadu - 627 428.
                </p>
                <p><b>Date:</b> 12/08/2024</p>
            </div>
        </div> -->

            <center>
                <label for="fromdate"><?php echo date("d-M-Y", strtotime($dt_from)); ?></label>

                <label for="todate"> - To - </label>
                <?php echo date("d-M-Y", strtotime($dt_to)); ?>
            </center>

            <!-- Title -->
            <h2 class="text-center text-primary my-4">DayBook</h2>

            <!-- Table Section -->
            <table class="table table-bordered" id="myTable">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Particular</th>
                        <th scope="col">Type</th>
                        <th scope="col">Paid</th>
                        <th scope="col">Received</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($consultant_payment as $consultant_payment) {
                    ?>
                        <tr>
                            <td scope="row"><?php echo date('d-m-Y', strtotime($consultant_payment['Date'])); ?></td>
                            <td><?php echo $consultant_payment['Name']; ?></td>
                            <td>Consultation</td>
                            <td>0</td>
                            <td><?php echo $consultant_payment['Amount']; ?></td>
                        </tr>
                    <?php } ?>
                    <?php
                    foreach ($patient_payment as $patient_payment) {
                    ?>
                        <tr>
                            <td scope="row"><?php echo date('d-m-Y', strtotime($patient_payment['Date'])); ?></td>
                            <td><?php echo $patient_payment['Name']; ?></td>
                            <td>Patient</td>
                            <td>0</td>
                            <td><?php echo $patient_payment['Amount']; ?></td>

                        </tr>
                    <?php } ?>
                    <?php
                    foreach ($expense as $expense) {
                    ?>
                        <tr>
                            <td scope="row"><?php echo date('d-m-Y', strtotime($expense['Date'])); ?></td>
                            <td><?php echo $expense['Expense_Name']; ?></td>
                            <td>Expenses</td>
                            <td><?php echo $expense['Amount']; ?></td>
                            <td>0</td>
                        </tr>
                    <?php }
                    foreach ($vendor_info as $vendor_info) {
                    ?>
                        <tr>
                            <td scope="row"><?php echo date('d-m-Y', strtotime($vendor_info['created_at'])); ?></td>
                            <td><?php echo $vendor_info['Name']; ?></td>
                            <td>Vendors</td>
                            <td><?php echo $vendor_info['Total_Amount']; ?></td>
                            <td>0</td>
                        </tr>
                    <?php }
                    foreach ($room as $room) {
                    ?>
                        <tr>
                            <td scope="row"><?php echo date('d-m-Y', strtotime($room['created_at'])); ?></td>
                            <td><?php echo $room['Person_Name']; ?></td>
                            <td>Rooms</td>
                            <td><?php echo $room['Amount']; ?></td>
                            <td>0</td>
                        </tr>
                    <?php } ?>
                    <!--	<tr>
					 <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">Total </th>
					<th scope="col"><?php echo $total_paid; ?></th>
					<th scope="col"><?php echo $total_received; ?></th>
                </tr>  -->
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $("button[type='submit']").on('click', function() {
            var fromdate = $("#fromdate").val();
            var todate = $("#todate").val();
            alert("From Date: " + fromdate + "\nTo Date: " + todate);
            // sortTable();

            //if (fromdate && todate) {
            // $.ajax({
            // url: "fetch_daybook.php",
            //  type: "POST",
            // data: {
            //  fromdate: fromdate,
            // todate: todate
            // },
            //success: function(response) {
            //  $('#myTable tbody').html(response);
            // }
            // });
            //  } else {
            //  alert("Please select both dates.");
            // }
        });
    });
</script>

<script>
    sortTable();

    function sortTable() {
        var table, rows, switching, i, x, y, shouldSwitch;
        table = document.getElementById("myTable");
        switching = true;
        /* Make a loop that will continue until
        no switching has been done: */
        while (switching) {
            // Start by saying: no switching is done:
            switching = false;
            rows = table.rows;
            /* Loop through all table rows (except the
            first, which contains table headers): */
            for (i = 1; i < (rows.length - 1); i++) {
                // Start by saying there should be no switching:
                shouldSwitch = false;
                /* Get the two elements you want to compare,
                one from current row and one from the next: */
                x = rows[i].getElementsByTagName("TD")[0];
                y = rows[i + 1].getElementsByTagName("TD")[0];
                // Check if the two rows should switch place:
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    // If so, mark as a switch and break the loop:
                    shouldSwitch = true;
                    break;
                }
            }
            if (shouldSwitch) {
                /* If a switch has been marked, make the switch
                and mark that a switch has been done: */
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
            }
        }
    }
</script>