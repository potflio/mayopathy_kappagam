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
        <form id="expenseForm" action="expenseins_form.php" method="post">

            <!-- Date -->
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="Date" required>
            </div>

            <!-- Expense Name -->
            <div class="mb-3">
                <label for="expenseName" class="form-label">Expense Name</label>
                <select class="form-control" id="expenseName" name="Expense_Name" placeholder="Enter expense name" required>
                    <option value="Salary">Salary</option>
                    <option value="Vendor">Vendor</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>

            <!-- Amount -->
            <div class="mb-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="number" class="form-control" id="amount" name="Amount" placeholder="Enter amount" required>
            </div>

            <!-- Pay Type -->
            <div class="mb-3">
                <label class="form-label">Pay Type</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="payTypeCash" name="Pay_Type" value="Cash" required>
                    <label class="form-check-label" for="payTypeCash">Cash</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="payTypeCard" name="Pay_Type" value="Card" required>
                    <label class="form-check-label" for="payTypeCard">ICICI BANK</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="payTypeOnline" name="Pay_Type" value="Online" required>
                    <label class="form-check-label" for="payTypeOnline">Indian Bank</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Narrator</label>
                <textarea class="form-control" name="" id=""></textarea>
            </div>
            <!-- Submit and Reset Buttons -->
            <div class="d-flex justify-content-center mt-4">
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form>
    </div>

    <script src="assets/js/expense.js"></script>

</body>

</html>