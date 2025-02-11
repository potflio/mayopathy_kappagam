<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MD Expense</title>
    <?php include 'navbar.php'; ?>
</head>

<body>
    <div class="container mt-5">
        <a href="expense.php" class="btn btn-primary">Back --></a><br><br>
        <h2 class="text-center text-primary">MD Expense Records</h2>

        <div class="mb-3">
            <label for="filterSelect" class="form-label">Filter Expenses:</label>
            <select id="filterSelect" class="form-select">
                <option value="1">1 Day</option>
                <option value="7">1 Week</option>
                <option value="30">1 Month</option>
                <option value="180">6 Months</option>
                <option value="365">1 Year</option>
                <option value="all">Lifetime</option>
            </select>
        </div>

        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-personal-tab" data-bs-toggle="pill" data-bs-target="#pills-personal" type="button" role="tab">Personal Expenses</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-hospital-tab" data-bs-toggle="pill" data-bs-target="#pills-hospital" type="button" role="tab">Hospital Expenses</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-food-travel-tab" data-bs-toggle="pill" data-bs-target="#pills-food-travel" type="button" role="tab">Food & Travel</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-balance-sheet-tab" data-bs-toggle="pill" data-bs-target="#pills-balance-sheet" type="button" role="tab">Balance Sheet</button>
            </li>
        </ul>
        <div class="row mb-4">
            <div class="col-md-4 col-12 mb-2 mb-md-0">
                <input type="text" id="search" class="form-control" placeholder="Search by name..." oninput="filterTable()">
            </div>
            <div class="col-md-4 col-12 text-md-end text-center">
                <button class="btn btn-danger me-2" onclick="downloadPDF()">Download PDF</button>
                <button class="btn btn-success" onclick="downloadExcel()">Download Excel</button>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-personal" role="tabpanel">
                <div class="table-responsive">
                    <table class="table table-bordered expense-table" data-category="personal">
                        <thead class="table-success">
                            <tr>
                                <th>S.No</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Payment Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2025-02-01</td>
                                <td>₹1,500</td>
                                <td>Credit Card</td>
                                <td><button class="btn btn-danger btn-sm">Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-hospital" role="tabpanel">
                <div class="table-responsive">
                    <table class="table table-bordered expense-table" data-category="hospital">
                        <thead class="table-info">
                            <tr>
                                <th>S.No</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Payment Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2025-02-02</td>
                                <td>₹5,000</td>
                                <td>Debit Card</td>
                                <td><button class="btn btn-danger btn-sm">Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-food-travel" role="tabpanel">
                <div class="table-responsive">
                    <table class="table table-bordered expense-table" data-category="food-travel">
                        <thead class="table-warning">
                            <tr>
                                <th>S.No</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Payment Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2025-02-03</td>
                                <td>₹800</td>
                                <td>Cash</td>
                                <td><button class="btn btn-danger btn-sm">Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-balance-sheet" role="tabpanel">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-dark text-white">
                            <tr>
                                <th>Category</th>
                                <th>Total Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Personal Expenses</td>
                                <td>₹1,500</td>
                            </tr>
                            <tr>
                                <td>Hospital Expenses</td>
                                <td>₹5,000</td>
                            </tr>
                            <tr>
                                <td>Food</td>
                                <td>₹800</td>
                            </tr>
                            <tr>
                                <td>Travel</td>
                                <td>₹3000</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Grand Total</td>
                                <td class="fw-bold">₹7,300</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("filterSelect").addEventListener("change", function() {
            let days = this.value;
            let today = new Date();
            document.querySelectorAll(".expense-table tbody tr").forEach(row => {
                let rowDate = new Date(row.cells[1].innerText);
                let timeDiff = Math.ceil((today - rowDate) / (1000 * 60 * 60 * 24));
                row.style.display = (days === "all" || timeDiff <= days) ? "" : "none";
            });
        });
    </script>

</body>

</html>