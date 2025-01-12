<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Details Form</title>
    <?php include 'navbar.php'; ?>
</head>

<body>
    <div class="container">
        <h2 class="text-center text-success mt-4">Room Details Form</h2>
        
        <form action="submit_room_details.php" method="POST">
            <div class="mb-3">
                <label for="roomNo" class="form-label">Room No</label>
                <input type="text" class="form-control" id="roomNo" name="roomNo" required>
            </div>

            <div class="mb-3">
                <label for="personName" class="form-label">Person Name</label>
                <input type="text" class="form-control" id="personName" name="personName" required>
            </div>

            <div class="mb-3">
                <label for="openDate" class="form-label">Open Date</label>
                <input type="date" class="form-control" id="openDate" name="openDate" required>
            </div>

            <div class="mb-3">
                <label for="dischargeDate" class="form-label">Discharge Date</label>
                <input type="date" class="form-control" id="dischargeDate" name="dischargeDate" required>
            </div>

            <div class="mb-3">
                <label for="roomType" class="form-label">Room Type</label>
                <select class="form-control" id="roomType" name="roomType" required>
                    <option value="">Select Room Type</option>
                    <option value="Single">Single</option>
                    <option value="Double">Double</option>
                    <option value="Suite">Suite</option>
                    <!-- Add more options as needed -->
                </select>
            </div>

            <div class="mb-3">
                <label for="comments" class="form-label">Comments</label>
                <textarea class="form-control" id="comments" name="comments" rows="4"></textarea>
            </div>

            <div class="mb-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="number" class="form-control" id="amount" name="amount" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit Room Details</button>
            </div>
        </form>
    </div>
</body>

</html>
