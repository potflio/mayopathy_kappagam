<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'navbar.php'; ?>
    <link rel="stylesheet" href="assets/css/consultation_details.css">
</head>

<body>
    <div class="container my-5">
        <h1 class="text-center text-primary">Consultation Details</h1>
        <div class="text-end mb-3">
            <a href="consultation_form.php" class="btn btn-primary">+ ADD</a>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="col-4">
                <input type="text" id="search" class="form-control" placeholder="Search by name..." oninput="filterTable()">
            </div>

            <button class="btn btn-success" onclick="downloadExcel()">Download Excel</button>
        </div>

        <div class="table-responsive">
            <table id="consultationTable" class="table table-bordered table-hover">
                <thead class="table-primary text-center">
                    <tr>
                        <th>S.No</th>
                        <th>Admission No</th>
                        <th>Patient Name</th>
                        <th>Mobile Number</th>
                        <th>Consultation Fee (₹)</th>
                        <th>Profile</th>
                        <th>Payment</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <tr>
                        <td>1</td>
                        <td>ADM001</td>
                        <td>John Doe</td>
                        <td>9876543210</td>
                        <td>500</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>ADM002</td>
                        <td>Jane Smith</td>
                        <td>9123456789</td>
                        <td>700</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-warning text-dark">Pending</span>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>ADM003</td>
                        <td>Samuel Johnson</td>
                        <td>9988776655</td>
                        <td>450</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>ADM004</td>
                        <td>Lisa Brown</td>
                        <td>8765432109</td>
                        <td>600</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-warning text-dark">Pending</span>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>ADM005</td>
                        <td>Michael Lee</td>
                        <td>9871234567</td>
                        <td>800</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>ADM006</td>
                        <td>Sophia Wilson</td>
                        <td>8912345678</td>
                        <td>650</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-warning text-dark">Pending</span>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>ADM007</td>
                        <td>Daniel Moore</td>
                        <td>8901234567</td>
                        <td>750</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>ADM008</td>
                        <td>Emily Taylor</td>
                        <td>8787654321</td>
                        <td>500</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-warning text-dark">Pending</span>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>ADM009</td>
                        <td>Matthew White</td>
                        <td>8767890123</td>
                        <td>550</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>ADM010</td>
                        <td>Ava Harris</td>
                        <td>8743210987</td>
                        <td>400</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-warning text-dark">Pending</span>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>ADM011</td>
                        <td>Oliver Clark</td>
                        <td>8909876543</td>
                        <td>520</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>ADM012</td>
                        <td>Isabella Scott</td>
                        <td>8902345678</td>
                        <td>620</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-warning text-dark">Pending</span>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>ADM013</td>
                        <td>Lucas Adams</td>
                        <td>8976543210</td>
                        <td>570</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>ADM014</td>
                        <td>Mia Davis</td>
                        <td>8971234560</td>
                        <td>680</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-warning text-dark">Pending</span>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>ADM015</td>
                        <td>Elijah Martinez</td>
                        <td>8998765432</td>
                        <td>490</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>ADM016</td>
                        <td>Charlotte Garcia</td>
                        <td>8765432101</td>
                        <td>700</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-warning text-dark">Pending</span>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>ADM017</td>
                        <td>Benjamin Hernandez</td>
                        <td>8898765432</td>
                        <td>850</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>ADM018</td>
                        <td>Amelia Robinson</td>
                        <td>8876543210</td>
                        <td>520</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-warning text-dark">Pending</span>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>ADM019</td>
                        <td>James Walker</td>
                        <td>8991234567</td>
                        <td>610</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-success">Paid</span></td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>ADM020</td>
                        <td>Harper Young</td>
                        <td>8987654321</td>
                        <td>560</td>
                        <td><a href="#"><i class="bi bi-person"></i></a></td>
                        <td><a href=""><i class="bi bi-coin text-warning"></i></a></td>
                        <td><span class="badge bg-warning text-dark">Pending</span>
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
</body>
<script src="assets/js/consultation_details.js"></script>

</html>