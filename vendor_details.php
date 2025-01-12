<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayopathy Kappagam - Patient Details</title>
    <link rel="stylesheet" href="assets/css/vendor_details.css">

</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container">
        <h2 class="text-center text-success mt-4">Vendor Details</h2>
        <div class="text-end mb-3">
            <a href="vendor_add_form.php" class="btn btn-primary">+ADD NEW</a>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="col-4">
                <input type="text" id="search" class="form-control" placeholder="Search by vendor name..." oninput="filterTable()">
            </div>
            <button class="btn btn-success" onclick="downloadExcel()">Download Excel</button>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle text-center">
                <thead class="table-success">
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Bill Date</th>
                        <th scope="col">Vendor Name</th>
                        <th scope="col">Mobile Number</th>
                        <th scope="col">Bill Amount</th>
                        <th scope="col">View</th>
                        <th scope="col">Payment</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <tr>
                        <td>1</td>
                        <td>2025-01-01</td>
                        <td>ABC Traders</td>
                        <td>9876543210</td>
                        <td>₹10,000</td>
                        <td><a href="#"><i class="bi bi-eye"></i></a></td>
                        <td><a href=""><i class="bi bi-cash-coin text-warning"></i></a></td>
                        <td><span class="badge bg-warning text-dark">Pending</span>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2025-01-02</td>
                        <td>XYZ Supplies</td>
                        <td>9123456789</td>
                        <td>₹12,500</td>
                        <td><a href="#"><i class="bi bi-eye"></i></a></td>
                        <td><a href=""><i class="bi bi-cash-coin text-warning"></i></a></td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>2025-01-03</td>
                        <td>Global Mart</td>
                        <td>9988776655</td>
                        <td>₹8,750</td>
                        <td><a href="#"><i class="bi bi-eye"></i></a></td>
                        <td><a href=""><i class="bi bi-cash-coin text-warning"></i></a></td>
                        <td><span class="badge bg-warning text-dark">Pending</span>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>2025-01-04</td>
                        <td>Elite Services</td>
                        <td>8765432109</td>
                        <td>₹15,000</td>
                        <td><a href="#"><i class="bi bi-eye"></i></a></td>
                        <td><a href=""><i class="bi bi-cash-coin text-warning"></i></a></td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>2025-01-05</td>
                        <td>Prime Distributors</td>
                        <td>9871234567</td>
                        <td>₹9,500</td>
                        <td><a href="#"><i class="bi bi-eye"></i></a></td>
                        <td><a href=""><i class="bi bi-cash-coin text-warning"></i></a></td>
                        <td><span class="badge bg-warning text-dark">Pending</span>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>2025-01-06</td>
                        <td>Metro Supplies</td>
                        <td>8912345678</td>
                        <td>₹7,000</td>
                        <td><a href="#"><i class="bi bi-eye"></i></a></td>
                        <td><a href=""><i class="bi bi-cash-coin text-warning"></i></a></td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>2025-01-07</td>
                        <td>Quick Solutions</td>
                        <td>8901234567</td>
                        <td>₹13,000</td>
                        <td><a href="#"><i class="bi bi-eye"></i></a></td>
                        <td><a href=""><i class="bi bi-cash-coin text-warning"></i></a></td>
                        <td><span class="badge bg-warning text-dark">Pending</span>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>2025-01-08</td>
                        <td>Essential Vendors</td>
                        <td>8787654321</td>
                        <td>₹10,750</td>
                        <td><a href="#"><i class="bi bi-eye"></i></a></td>
                        <td><a href=""><i class="bi bi-cash-coin text-warning"></i></a></td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>2025-01-09</td>
                        <td>Reliable Co.</td>
                        <td>8767890123</td>
                        <td>₹6,500</td>
                        <td><a href="#"><i class="bi bi-eye"></i></a></td>
                        <td><a href=""><i class="bi bi-cash-coin text-warning"></i></a></td>
                        <td><span class="badge bg-warning text-dark">Pending</span>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>2025-01-10</td>
                        <td>Pro Services</td>
                        <td>8743210987</td>
                        <td>₹8,200</td>
                        <td><a href="#"><i class="bi bi-eye"></i></a></td>
                        <td><a href=""><i class="bi bi-cash-coin text-warning"></i></a></td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>2025-01-11</td>
                        <td>Alpha Suppliers</td>
                        <td>8909876543</td>
                        <td>₹11,300</td>
                        <td><a href="#"><i class="bi bi-eye"></i></a></td>
                        <td><a href=""><i class="bi bi-cash-coin text-warning"></i></a></td>
                        <td><span class="badge bg-warning text-dark">Pending</span>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>2025-01-12</td>
                        <td>Omega Traders</td>
                        <td>8902345678</td>
                        <td>₹9,700</td>
                        <td><a href="#"><i class="bi bi-eye"></i></a></td>
                        <td><a href=""><i class="bi bi-cash-coin text-warning"></i></a></td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>2025-01-13</td>
                        <td>Bright Co.</td>
                        <td>8976543210</td>
                        <td>₹14,000</td>
                        <td><a href="#"><i class="bi bi-eye"></i></a></td>
                        <td><a href=""><i class="bi bi-cash-coin text-warning"></i></a></td>
                        <td><span class="badge bg-warning text-dark">Pending</span>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>2025-01-14</td>
                        <td>Smart Vendors</td>
                        <td>8971234560</td>
                        <td>₹8,500</td>
                        <td><a href="#"><i class="bi bi-eye"></i></a></td>
                        <td><a href=""><i class="bi bi-cash-coin text-warning"></i></a></td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>2025-01-15</td>
                        <td>Visionary Supplies</td>
                        <td>8998765432</td>
                        <td>₹12,000</td>
                        <td><a href="#"><i class="bi bi-eye"></i></a></td>
                        <td><a href=""><i class="bi bi-cash-coin text-warning"></i></a></td>
                        <td><span class="badge bg-warning text-dark">Pending</span>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>2025-01-16</td>
                        <td>Trusted Partners</td>
                        <td>8765432101</td>
                        <td>₹7,800</td>
                        <td><a href="#"><i class="bi bi-eye"></i></a></td>
                        <td><a href=""><i class="bi bi-cash-coin text-warning"></i></a></td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>2025-01-17</td>
                        <td>Golden Suppliers</td>
                        <td>8898765432</td>
                        <td>₹13,500</td>
                        <td><a href="#"><i class="bi bi-eye"></i></a></td>
                        <td><a href=""><i class="bi bi-cash-coin text-warning"></i></a></td>
                        <td><span class="badge bg-warning text-dark">Pending</span>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>2025-01-18</td>
                        <td>Shining Stars</td>
                        <td>8876543210</td>
                        <td>₹6,900</td>
                        <td><a href="#"><i class="bi bi-eye"></i></a></td>
                        <td><a href=""><i class="bi bi-cash-coin text-warning"></i></a></td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>2025-01-19</td>
                        <td>Leading Vendors</td>
                        <td>8991234567</td>
                        <td>₹11,800</td>
                        <td><a href="#"><i class="bi bi-eye"></i></a></td>
                        <td><a href=""><i class="bi bi-cash-coin text-warning"></i></a></td>
                        <td><span class="badge bg-warning text-dark">Pending</span>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>2025-01-20</td>
                        <td>Future Mart</td>
                        <td>8987654321</td>
                        <td>₹10,400</td>
                        <td><a href="#"><i class="bi bi-eye"></i></a></td>
                        <td><a href=""><i class="bi bi-cash-coin text-warning"></i></a></td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-3">
            <nav aria-label="Page navigation example">
                <ul id="pagination" class="pagination">
                    <!-- Pagination will be dynamically generated -->
                </ul>
            </nav>
        </div>
    </div>


</body>
<script src="assets/js/vendor_details.js"></script>

</html>