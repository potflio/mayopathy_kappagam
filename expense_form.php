<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Form</title>
    <!-- Bootstrap CDN -->
    <?php include 'navbar.php'; ?>
</head>
<body>
<div class="container my-5">
    <h3 class="text-center mb-4">Expense Form</h3>
    <form id="expenseForm">
        <div class="row g-3">
            <!-- Date -->
            <div class="col-md-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <!-- Expense Name -->
            <div class="col-md-3">
                <label for="expenseName" class="form-label">Expense Name</label>
                <input type="text" class="form-control" id="expenseName" name="expenseName" placeholder="Enter expense name" required>
            </div>
            <!-- Amount -->
            <div class="col-md-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter amount" required>
            </div>
            <!-- Pay Type -->
            <div class="col-md-3">
                <label for="payType" class="form-label">Pay Type</label>
                <select class="form-select" id="payType" name="payType" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="Cash">Cash</option>
                    <option value="Card">Card</option>
                    <option value="Online">Online</option>
                </select>
            </div>
        </div>
        <div class="mt-4 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </form>
    <!-- <div id="output" class="mt-5">
        <h4 class="text-center">Submitted Data</h4>
        <table class="table table-bordered table-responsive">
            <thead class="table-primary">
            <tr>
                <th>S.NO</th>
                <th>Date</th>
                <th>Expense Name</th>
                <th>Amount</th>
                <th>Pay Type</th>
            </tr>
            </thead>
            <tbody id="tableBody">
             Data will be dynamically added here 
            </tbody>
        </table>
    </div> -->
</div>

<script src="assets/js/expense.js"></script>

</body>
</html>
