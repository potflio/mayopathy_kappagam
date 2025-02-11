<?php
require('class_hospital.php');
$obj  = new Hospital();
$consultation_sum = $obj->single_display("select sum(Amount) as consultation_sum from consultant_payment");
$monthly_payment_sum  = $obj->single_display("select sum(Amount) as monthly_payment_sum from patient_payment where Payment_DESC='Monthly_Fee'");
$machine_payment_sum  = $obj->single_display("select sum(Amount) as machine_payment_sum from patient_payment where Payment_DESC='Machine'");
$room_payment_sum  = $obj->single_display("select sum(Amount) as room_payment_sum from room_payment");
$total_receipt = $consultation_sum['consultation_sum'] + $monthly_payment_sum['monthly_payment_sum'] + $machine_payment_sum['machine_payment_sum'] + $room_payment_sum['room_payment_sum'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balance Sheet for ABC Ltd</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container">
        <h2 class="text-center text-primary">Balance Sheet</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th colspan="2" class="text-center"Style="background:#EFB036;" >Receipt Vouchers</th>
                    <th colspan="2" class="text-center" Style="background:#EFB036;" >Payment Vouchers</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2" ><b>Consultation</b></td>
                    <td colspan="2" ><b>Expenses</b></td>
                </tr>
                <tr>
                    <td>Consulatation Fee</td>
                    <td>₹<?php echo $consultation_sum['consultation_sum']; ?></td>
                    <td>General Expenses</td>
                    <td>₹20</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Patients </b></td>
                    <td>Short-term Debt</td>
                    <td>₹10</td>
                </tr>
                <tr>
                    <td>Monthly Fee</td>
                    <td>₹<?php echo $monthly_payment_sum['monthly_payment_sum']; ?></td>
                    <td colspan="2"><b>Vendor</b></td>
                </tr>
                <tr>
                    <td>Machine Charges</td>
                    <td>₹<?php echo $machine_payment_sum['machine_payment_sum']; ?></td>
                    <td>Vendor Payment</td>
                    <td>₹60</td>
                </tr>
                <tr>
                    <td>Rooms Payment</td>
                    <td>₹ <?php echo $room_payment_sum['room_payment_sum']; ?></td>
                    <td class="table-danger" ><b>Total Receipt</b></td>
                    <td class="table-danger"><b>₹90</b></td>
                </tr>
                <tr>
                    <td class="table-danger"><b>Total Payment</b></td>
                    <td class="table-danger"><b>₹ <?php echo $total_receipt; ?></b></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td colspan="2"><b>&nbsp;</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="table-success">Total Balance</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><b>Total Payments</b></td>
                    <td><b>₹60</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><b>Receipts</b></td>
                    <td><b>₹150</b></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>