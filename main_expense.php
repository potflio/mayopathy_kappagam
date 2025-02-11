<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense</title>
    <?php include 'navbar.php' ?>
</head>

<body>
    <div class="container mt-3">
        <a href="expense.php" class="btn btn-primary">Back --></a><br><br>
        <h4 class="alert alert-success text-center">Expense</h2>
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-personal-tab" data-bs-toggle="pill" data-bs-target="#pills-personal" type="button" role="tab">Salary</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-hospital-tab" data-bs-toggle="pill" data-bs-target="#pills-hospital" type="button" role="tab">Machine Materials</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-hospital2-tab" data-bs-toggle="pill" data-bs-target="#pills-hospital2" type="button" role="tab">Vendor Payments</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-hospital3-tab" data-bs-toggle="pill" data-bs-target="#pills-hospital3" type="button" role="tab">Office Expense</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-hospital3-tab" data-bs-toggle="pill" data-bs-target="#pills-hospital4" type="button" role="tab">Advance</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-hospital3-tab" data-bs-toggle="pill" data-bs-target="#pills-hospital5" type="button" role="tab">Other Branch Expenses</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-hospital3-tab" data-bs-toggle="pill" data-bs-target="#pills-hospital6" type="button" role="tab">Admin Expense</button>
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

                    <p><b>TOTAL AMOUNT:</b><span>$2050</span></p>
                    <div class="table-responsive">
                        <table class="table table-bordered expense-table" data-category="personal">
                            <thead class="table-success">
                                <tr>
                                    <th>S.No</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Amount</th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-hospital" role="tabpanel">

                    <p><b>TOTAL AMOUNT:</b><span>$2050</span></p>
                    <div class="table-responsive">
                        <table class="table table-bordered expense-table" data-category="hospital">
                            <thead class="table-info">
                                <tr>
                                    <th>S.No</th>

                                    <th>Name</th>
                                    <th>Date</th>

                                    <th>Amont</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>


                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-hospital2" role="tabpanel">

                    <p><b>TOTAL AMOUNT:</b><span>$2050</span></p>
                    <div class="table-responsive">
                        <table class="table table-bordered expense-table" data-category="hospital">
                            <thead class="table-info">
                                <tr>
                                    <th>S.No</th>

                                    <th>Name</th>
                                    <th>Date</th>

                                    <th>Amont</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>


                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-hospital3" role="tabpanel">

                    <p><b>TOTAL AMOUNT:</b><span>$2050</span></p>
                    <div class="table-responsive">
                        <table class="table table-bordered expense-table" data-category="hospital">
                            <thead class="table-info">
                                <tr>
                                    <th>S.No</th>

                                    <th>Name</th>
                                    <th>Date</th>

                                    <th>Amont</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>


                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-hospital4" role="tabpanel">

                    <p><b>TOTAL AMOUNT:</b><span>$2050</span></p>
                    <div class="table-responsive">
                        <table class="table table-bordered expense-table" data-category="hospital">
                            <thead class="table-info">
                                <tr>
                                    <th>S.No</th>

                                    <th>Name</th>
                                    <th>Date</th>

                                    <th>Amont</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td></td>
                                    <td></td>

                                    <td></td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-hospital5" role="tabpanel">

                    <p><b>TOTAL AMOUNT:</b><span>$2050</span></p>
                    <div class="table-responsive">
                        <table class="table table-bordered expense-table" data-category="hospital">
                            <thead class="table-info">
                                <tr>
                                    <th>S.No</th>

                                    <th>Name</th>
                                    <th>Date</th>

                                    <th>Amont</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>


                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-hospital6" role="tabpanel">

                    <p><b>TOTAL AMOUNT:</b><span>$2050</span></p>
                    <div class="table-responsive">
                        <table class="table table-bordered expense-table" data-category="hospital">
                            <thead class="table-info">
                                <tr>
                                    <th>S.No</th>

                                    <th>Name</th>
                                    <th>Date</th>

                                    <th>Amont</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>


                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
    </div>
</body>

</html>