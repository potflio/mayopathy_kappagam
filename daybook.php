<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DayBook</title>
    <?php include 'navbar.php'; ?>
</head>

<body>
    <div class="container mt-5">
        <!-- Header Section -->
        <div class="row">
            <div class="col-4">
                <h6>MAYOPATHY
                    <br> KAPPAGAM
                </h6>

            </div>
            <div class="col-8 text-end">
                <p>
                    MAYOPATHY KAPPAGAM <br>
                    Tirunelveli – Shencottai Rd,<br>
                    Veeravanallur,<br>
                    Tamil Nadu - 627 428.
                </p>
                <p><b>Date:</b> 12/08/2024</p>
            </div>
        </div>

        <!-- Title -->
        <h2 class="text-center text-primary my-4">DayBook</h2>
        <div class="text-end mb-3">
            <a href="consultation_form.php" class="btn btn-primary">+ ADD</a>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="col-4">
                <input type="text" id="search" class="form-control" placeholder="Search by name..." oninput="filterTable()">
            </div>

            <button class="btn btn-success" onclick="downloadExcel()">Download Excel</button>
        </div>
        <!-- Table Section -->
        <table class="table table-bordered">
            <thead class="table-primary">
                <tr>
                    <th scope="col">S.no</th>
                    <th scope="col">Date</th>
                    <th scope="col">Income</th>
                    <th scope="col">Expense</th>
                </tr>
            </thead>
            <tbody id="myTable">
                <tr>
                    <td>1</td>
                    <td>2025-01-01</td>
                    <td>$100</td>
                    <td>$50</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2025-01-02</td>
                    <td>$200</td>
                    <td>$70</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>2025-01-03</td>
                    <td>$150</td>
                    <td>$60</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>2025-01-04</td>
                    <td>$120</td>
                    <td>$80</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>2025-01-05</td>
                    <td>$90</td>
                    <td>$40</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>2025-01-06</td>
                    <td>$130</td>
                    <td>$50</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>2025-01-07</td>
                    <td>$110</td>
                    <td>$60</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>2025-01-08</td>
                    <td>$140</td>
                    <td>$70</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>2025-01-09</td>
                    <td>$170</td>
                    <td>$90</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>2025-01-10</td>
                    <td>$160</td>
                    <td>$80</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>2025-01-11</td>
                    <td>$180</td>
                    <td>$100</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>2025-01-12</td>
                    <td>$190</td>
                    <td>$110</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>2025-01-13</td>
                    <td>$200</td>
                    <td>$120</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>2025-01-14</td>
                    <td>$210</td>
                    <td>$130</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>2025-01-15</td>
                    <td>$220</td>
                    <td>$140</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>2025-01-16</td>
                    <td>$230</td>
                    <td>$150</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>2025-01-17</td>
                    <td>$240</td>
                    <td>$160</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>2025-01-18</td>
                    <td>$250</td>
                    <td>$170</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>2025-01-19</td>
                    <td>$260</td>
                    <td>$180</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>2025-01-20</td>
                    <td>$270</td>
                    <td>$190</td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-center mt-3">
            <nav aria-label="Page navigation example">
                <ul id="pagination" class="pagination">
                    <!-- Pagination will be dynamically generated -->
                </ul>
            </nav>
        </div>
    </div>


</body>

</html>