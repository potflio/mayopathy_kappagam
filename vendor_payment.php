<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Payment</title>
    <?php include 'navbar.php'; ?>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center text-success mb-4">Vendor Payment</h2>
        <form>
            <!-- Row 1: Name and Date -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" id="name" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="date" class="form-label">Date:</label>
                    <input type="date" id="date" class="form-control">
                </div>
            </div>
            
            <!-- Row 2: Purpose and Department -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="purpose" class="form-label">Propose of:</label>
                    <input type="text" id="purpose" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="department" class="form-label">Department:</label>
                    <input type="text" id="department" class="form-control">
                </div>
            </div>
            
            <!-- Row 3: In Words -->
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="inWords" class="form-label">In Words:</label>
                    <input type="text" id="inWords" class="form-control">
                </div>
            </div>
            
            <!-- Row 4: Amount and Payment Type -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="amount" class="form-label">Amount:</label>
                    <input type="number" id="amount" class="form-control">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="form-check me-3">
                        <input class="form-check-input" type="checkbox" id="cash">
                        <label class="form-check-label" for="cash">Cash</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="cheque">
                        <label class="form-check-label" for="cheque">Cheque</label>
                    </div>
                </div>
            </div>
            
            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg">
                    PAY NOW <i class="bi bi-currency-dollar"></i>
                </button>
            </div>
        </form>
    </div>

    
</body>
</html>
