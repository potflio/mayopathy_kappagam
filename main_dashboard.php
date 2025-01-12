<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <?php include 'navbar.php'; ?>

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
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-person-lines-fill display-4 text-primary"></i>
                            <h5 class="mt-2">Consultation</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-people-fill display-4 text-success"></i>
                            <h5 class="mt-2">Total Patients</h5>
                            <p class="text-muted mb-0">100</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-basket-fill display-4 text-warning"></i>
                            <h5 class="mt-2">Vendors</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-building display-4 text-danger"></i>
                            <h5 class="mt-2">8/10 Total Rooms</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-person-workspace display-4 text-info"></i>
                            <h5 class="mt-2">10 Total Staff</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-cash-coin display-4 text-secondary"></i>
                            <h5 class="mt-2">35/40 Fees</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-coin display-4 text-dark"></i>
                            <h5 class="mt-2">Expense</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-bell-fill display-4 text-primary"></i>
                            <h5 class="mt-2">Reminders</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-book display-4 text-success"></i>
                            <h5 class="mt-2">DayBook</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-journal display-4 text-warning"></i>
                            <h5 class="mt-2">Balance Sheet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Reminder Table -->
        <div class="container mt-5">
            <h3 class="text-center mb-4 fw-bold text-secondary">Reminder (Today)</h3>
            <div class="table-responsive">
                <table class="table table-bordered table-hover text-center align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th>S.No</th>
                            <th>Patient Name</th>
                            <th>Due Amount (₹)</th>
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
            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-3">
                <nav>
                    <ul class="pagination pagination-sm">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</body>

</html>