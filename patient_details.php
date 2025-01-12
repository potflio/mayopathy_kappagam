<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayopathy Kappagam - Patient Details</title>
    <link rel="stylesheet" href="assets/css/patient_details.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container">
        <h2 class="text-center text-success mt-4">Patient Details</h2>
        <div class="text-end mb-3">
            <a href="patient_add_form.php" class="btn btn-primary">+ADD NEW</a>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="col-4">
                <input type="text" id="search" class="form-control" placeholder="Search by name..." oninput="filterTable()">
            </div>
            <button class="btn btn-success" onclick="downloadExcel()">Download Excel</button>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle text-center">
                <thead class="table-success">
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Admission No</th>
                        <th scope="col">Patient Name</th>
                        <th scope="col">Mobile Number</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Profile</th>
                        <th scope="col">Payment</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <tr>
                        <td>1</td>
                        <td>123456</td>
                        <td>John Doe</td>
                        <td>1234567890</td>
                        <td>$100.00</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-warning text-dark">Pending</span>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>987654</td>
                        <td>Jane Doe</td>
                        <td>0987654321</td>
                        <td>$50.00</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>567890</td>
                        <td>David Lee</td>
                        <td>9876543210</td>
                        <td>$75.00</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-warning text-dark">Pending</span>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>147258</td>
                        <td>Sarah Jones</td>
                        <td>8765432109</td>
                        <td>$120.00</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>369258</td>
                        <td>Michael Brown</td>
                        <td>7654321098</td>
                        <td>$90.00</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-warning text-dark">Pending</span>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>741258</td>
                        <td>Emily Davis</td>
                        <td>6543210987</td>
                        <td>$60.00</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>963258</td>
                        <td>Daniel Miller</td>
                        <td>5432109876</td>
                        <td>$80.00</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-warning text-dark">Pending</span>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>185258</td>
                        <td>Olivia Taylor</td>
                        <td>4321098765</td>
                        <td>$150.00</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>529258</td>
                        <td>James Wilson</td>
                        <td>3210987654</td>
                        <td>$110.00</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-warning text-dark">Pending</span>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>781258</td>
                        <td>Chloe Anderson</td>
                        <td>2109876543</td>
                        <td>$70.00</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>943258</td>
                        <td>Ethan Jones</td>
                        <td>1098765432</td>
                        <td>$95.00</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-warning text-dark">Pending</span>
                        </td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>167258</td>
                        <td>Sophia Clark</td>
                        <td>9876543210</td>
                        <td>$125.00</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>389258</td>
                        <td>Liam Lewis</td>
                        <td>8765432109</td>
                        <td>$85.00</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-warning text-dark">Pending</span>
                        </td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>721258</td>
                        <td>Isabella Young</td>
                        <td>7654321098</td>
                        <td>$115.00</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>903258</td>
                        <td>Mason Moore</td>
                        <td>6543210987</td>
                        <td>$65.00</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-warning text-dark">Pending</span>
                        </td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>145258</td>
                        <td>Ava White</td>
                        <td>5432109876</td>
                        <td>$130.00</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>569258</td>
                        <td>Jacob Martinez</td>
                        <td>4321098765</td>
                        <td>$75.00</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-warning text-dark">Pending</span>
                        </td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>783258</td>
                        <td>Mia Rodriguez</td>
                        <td>3210987654</td>
                        <td>$100.00</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>921258</td>
                        <td>William Hernandez</td>
                        <td>2109876543</td>
                        <td>$80.00</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-warning text-dark">Pending</span>
                        </td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>105258</td>
                        <td>Emma Collins</td>
                        <td>1098765432</td>
                        <td>$110.00</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-success">Paid</span></td>
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
    <?php include 'footer.php'; ?>
    <script src="assets/js/patient_details.js"></script>
</body>




</html>