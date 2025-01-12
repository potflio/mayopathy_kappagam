<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fee Table</title>
    <?php include 'navbar.php'; ?>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center text-primary mb-4">Fee</h1>
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="col-4">
                <input type="text" id="search" class="form-control" placeholder="Search by name..." oninput="filterTable()">
            </div>
            <button class="btn btn-success" onclick="downloadExcel()">Download Excel</button>
        </div>
        <div class="table-responsive">
            <table id="fee-table" class="table table-bordered text-center">
                <thead class="table-light">
                    <tr>
                        <th>S.No</th>
                        <th>A/No</th>
                        <th>Patient Name</th>
                        <th>Disease</th>
                        <th>Fees</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Pay</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <tr>
                        <td>1</td>
                        <td>A101</td>
                        <td>John Doe</td>
                        <td>Flu</td>
                        <td>₹500</td>
                        <td>₹500</td>
                        <td><span class="badge bg-success">Paid</span></td>
                        <td>--</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>A102</td>
                        <td>Jane Smith</td>
                        <td>Cold</td>
                        <td>₹300</td>
                        <td>₹300</td>
                        <td><span class="badge bg-success">Paid</span></td>
                        <td>--</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>A103</td>
                        <td>Mike Brown</td>
                        <td>Fever</td>
                        <td>₹400</td>
                        <td>₹400</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td><button class="btn btn-primary btn-sm">Pay</button></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>A104</td>
                        <td>Emily Davis</td>
                        <td>Allergy</td>
                        <td>₹600</td>
                        <td>₹600</td>
                        <td><span class="badge bg-success">Paid</span></td>
                        <td>--</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>A105</td>
                        <td>Chris Wilson</td>
                        <td>Headache</td>
                        <td>₹350</td>
                        <td>₹350</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td><button class="btn btn-primary btn-sm">Pay</button></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>A106</td>
                        <td>Linda Johnson</td>
                        <td>Diabetes</td>
                        <td>₹800</td>
                        <td>₹800</td>
                        <td><span class="badge bg-success">Paid</span></td>
                        <td>--</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>A107</td>
                        <td>Robert Lee</td>
                        <td>Hypertension</td>
                        <td>₹900</td>
                        <td>₹900</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td><button class="btn btn-primary btn-sm">Pay</button></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>A108</td>
                        <td>Mary Clark</td>
                        <td>Asthma</td>
                        <td>₹750</td>
                        <td>₹750</td>
                        <td><span class="badge bg-success">Paid</span></td>
                        <td>--</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>A109</td>
                        <td>Daniel Walker</td>
                        <td>Back Pain</td>
                        <td>₹500</td>
                        <td>₹500</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td><button class="btn btn-primary btn-sm">Pay</button></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>A110</td>
                        <td>Susan Young</td>
                        <td>Arthritis</td>
                        <td>₹1,000</td>
                        <td>₹1,000</td>
                        <td><span class="badge bg-success">Paid</span></td>
                        <td>--</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>A111</td>
                        <td>Kevin Harris</td>
                        <td>Infection</td>
                        <td>₹650</td>
                        <td>₹650</td>
                        <td><span class="badge bg-success">Paid</span></td>
                        <td>--</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>A112</td>
                        <td>Laura Martin</td>
                        <td>Flu</td>
                        <td>₹500</td>
                        <td>₹500</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td><button class="btn btn-primary btn-sm">Pay</button></td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>A113</td>
                        <td>James Allen</td>
                        <td>Cold</td>
                        <td>₹300</td>
                        <td>₹300</td>
                        <td><span class="badge bg-success">Paid</span></td>
                        <td>--</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>A114</td>
                        <td>Patricia White</td>
                        <td>Fever</td>
                        <td>₹400</td>
                        <td>₹400</td>
                        <td><span class="badge bg-success">Paid</span></td>
                        <td>--</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>A115</td>
                        <td>George King</td>
                        <td>Allergy</td>
                        <td>₹600</td>
                        <td>₹600</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td><button class="btn btn-primary btn-sm">Pay</button></td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>A116</td>
                        <td>Barbara Scott</td>
                        <td>Headache</td>
                        <td>₹350</td>
                        <td>₹350</td>
                        <td><span class="badge bg-success">Paid</span></td>
                        <td>--</td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>A117</td>
                        <td>Edward Adams</td>
                        <td>Diabetes</td>
                        <td>₹800</td>
                        <td>₹800</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td><button class="btn btn-primary btn-sm">Pay</button></td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>A118</td>
                        <td>Jennifer Lopez</td>
                        <td>Hypertension</td>
                        <td>₹900</td>
                        <td>₹900</td>
                        <td><span class="badge bg-success">Paid</span></td>
                        <td>--</td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>A119</td>
                        <td>William Turner</td>
                        <td>Asthma</td>
                        <td>₹750</td>
                        <td>₹750</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td><button class="btn btn-primary btn-sm">Pay</button></td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>A120</td>
                        <td>Karen Hall</td>
                        <td>Back Pain</td>
                        <td>₹500</td>
                        <td>₹500</td>
                        <td><span class="badge bg-success">Paid</span></td>
                        <td>--</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center mt-3">
            <nav aria-label="Page navigation example">
                <ul id="pagination" class="pagination">
                    <!-- Pagination will be dynamically generated -->
                </ul>
            </nav>
        </div>
    </div>

    <script src="assets/js/fee.js"></script>
</body>

</html>