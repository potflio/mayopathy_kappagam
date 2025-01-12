<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reminder</title>
   <?php include 'navbar.php'; ?>
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Reminder</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark text-center">
                    <tr>
                        <th>S.no</th>
                        <th>Patient Name</th>
                        <th>Due Amount (₹)</th>
                        <th>Due Date</th>
                        <th>Payment Mode</th>
                        <th>Remarks</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-danger">
                        <td>1</td>
                        <td>Mr. Ravi Kumar</td>
                        <td>15,000</td>
                        <td>27-Dec-2024</td>
                        <td>Online/UPI</td>
                        <td>Follow-up consultation</td>
                    </tr>
                    <tr class="table-warning">
                        <td>2</td>
                        <td>Ms. Priya Sharma</td>
                        <td>8,500</td>
                        <td>28-Dec-2024</td>
                        <td>Cash/Card</td>
                        <td>Physiotherapy package</td>
                    </tr>
                    <tr class="table-info">
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
    </div>

   
</body>
</html>
