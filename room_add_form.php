<!DOCTYPE html>
<html lang="en">
	<?php
	require('class_hospital.php');
	$obj = new Hospital();
	//$room = $obj->full_display_qr("select Room_no from room where Booking_Status='Booked'");
	?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Details Form</title>
    <?php include 'navbar.php'; ?>
</head>

<body>
    <div class="container">
        <a href="room_details.php" class="btn btn-primary">Back --></a>
        <h2 class="text-center text-success mt-4">Room Details Form</h2>
        
        <form action="roomins_form.php" method="POST">
            <div class="mb-3">
                <label for="roomNo" class="form-label">Room No</label>
				 <select class="form-control" id="roomNo" name="Room_No" required>
				<?php 
				$totalroom = $obj->full_display_qr("select * from total_rooms where Room_No Not IN (select Room_no from room where Booking_Status='Booked')");
				foreach($totalroom as $totalroom){
				echo "<option value='".$totalroom['Room_No']."'>".$totalroom['Room_No']."</option>";
				}
				?>
				</select>
            </div>
                <div class="mb-3">
                <label for="personName" class="form-label">Patient_Code</label>
                <input type="text" class="form-control" id="personName" name="Patient_Code" required>
            </div>
            <div class="mb-3">
                <label for="personName" class="form-label">Person Name</label>
                <input type="text" class="form-control" id="personName" name="Person_Name" required>
            </div>

            <div class="mb-3">
                <label for="openDate" class="form-label">Open Date</label>
                <input type="date" class="form-control" id="openDate" name="Open_Date" required>
            </div>

            <div class="mb-3">
                <label for="dischargeDate" class="form-label">Discharge Date</label>
                <input type="date" class="form-control" id="dischargeDate" name="Discharge_Date" required>
            </div>

            <div class="mb-3">
                <label for="roomType" class="form-label">Room Type</label>
                <select class="form-control" id="roomType" name="Room_Type" required>
                    <option value="">Select Room Type</option>
                    <option value="Single">Single</option>
                    <option value="Double">Double</option>
                    <option value="Suite">Suite</option>
                    <!-- Add more options as needed -->
                </select>
            </div>

            <div class="mb-3">
                <label for="comments" class="form-label">Comments</label>
                <textarea class="form-control" id="comments" name="Comments" rows="4"></textarea>
            </div>

            <div class="mb-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="number" class="form-control" id="amount" name="Amount" required>
            </div>
			 <div class="mb-3">
                <label for="amount" class="form-label" hidden>Advanced_Amount</label>
                <input type="number" class="form-control" id="Advanced_mount" name="Advanced_Amount" hidden>
            </div>
			
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit Room Details</button>
            </div>
        </form>
    </div>
</body>

</html>
