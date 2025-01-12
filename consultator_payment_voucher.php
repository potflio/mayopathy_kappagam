<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultator Payment Voucher</title>
    <?php include 'navbar.php'; ?>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Consultator Payment Voucher</h2>
        <div class="row">
            <!-- Form Section -->
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="consultatorCode" class="form-label">Consultator Code:</label>
                        <input type="text" class="form-control" id="consultatorCode" placeholder="Enter consultator Code">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Name">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date:</label>
                        <input type="date" class="form-control" id="date">
                    </div>
                    <div class="mb-3">
                        <label for="paymentMode" class="form-label">Payment Mode:</label>
                        <input type="text" class="form-control" id="paymentMode" placeholder="Enter Payment Mode">
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount:</label>
                        <input type="number" class="form-control" id="amount" placeholder="Enter Amount">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>

            <!-- consultator Details Section -->
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="assets/icons/consultator_profile.png" class="card-img-top" alt="consultator Image">
                    <div class="card-body">
                        <h5 class="card-title">Name: John</h5>
                        <p class="card-text">Disease: IBM</p>
                        <p class="card-text">ID: 011</p>
                        <p class="card-text">Joining Date: 23/04/2024</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>