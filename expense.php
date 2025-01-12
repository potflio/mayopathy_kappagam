<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Expense Table</title>
  <?php include 'navbar.php'; ?>
</head>

<body>
  <div class="container mt-5">
    <h2 class="text-center text-primary mb-4">Expense</h2>
    <div class="text-end mb-3">
      <a href="expense_form.php" class="btn btn-primary">+ADD NEW</a>
    </div>
    <div class="d-flex justify-content-between align-items-center mb-4">
      <div class="col-4">
        <input type="text" id="search" class="form-control" placeholder="Search by name..." oninput="filterTable()">
      </div>
      <button class="btn btn-success" onclick="downloadExcel()">Download Excel</button>
    </div>
    <table id="expense-table" class="table table-bordered">
      <thead class="table-warning">
        <tr>
          <th scope="col">S.NO</th>
          <th scope="col">Date</th>
          <th scope="col">Expense Name</th>
          <th scope="col">Amount</th>
          <th scope="col">Pay Type</th>
        </tr>
      </thead>
      <tbody id="myTable">
        <tr>
          <td>1</td>
          <td>2025-01-01</td>
          <td>Office Supplies</td>
          <td>₹1,500</td>
          <td>Cash</td>
        </tr>
        <tr>
          <td>2</td>
          <td>2025-01-02</td>
          <td>Travel</td>
          <td>₹3,200</td>
          <td>Card</td>
        </tr>
        <tr>
          <td>3</td>
          <td>2025-01-03</td>
          <td>Electricity Bill</td>
          <td>₹7,800</td>
          <td>Online</td>
        </tr>
        <tr>
          <td>4</td>
          <td>2025-01-04</td>
          <td>Stationery</td>
          <td>₹450</td>
          <td>Cash</td>
        </tr>
        <tr>
          <td>5</td>
          <td>2025-01-05</td>
          <td>Internet Bill</td>
          <td>₹1,200</td>
          <td>Online</td>
        </tr>
        <tr>
          <td>6</td>
          <td>2025-01-06</td>
          <td>Maintenance</td>
          <td>₹4,000</td>
          <td>Card</td>
        </tr>
        <tr>
          <td>7</td>
          <td>2025-01-07</td>
          <td>Fuel</td>
          <td>₹2,500</td>
          <td>Cash</td>
        </tr>
        <tr>
          <td>8</td>
          <td>2025-01-08</td>
          <td>Software Subscription</td>
          <td>₹5,600</td>
          <td>Online</td>
        </tr>
        <tr>
          <td>9</td>
          <td>2025-01-09</td>
          <td>Cleaning Services</td>
          <td>₹1,000</td>
          <td>Card</td>
        </tr>
        <tr>
          <td>10</td>
          <td>2025-01-10</td>
          <td>Office Rent</td>
          <td>₹15,000</td>
          <td>Online</td>
        </tr>
        <tr>
          <td>11</td>
          <td>2025-01-11</td>
          <td>Refreshments</td>
          <td>₹850</td>
          <td>Cash</td>
        </tr>
        <tr>
          <td>12</td>
          <td>2025-01-12</td>
          <td>Repairs</td>
          <td>₹2,300</td>
          <td>Card</td>
        </tr>
        <tr>
          <td>13</td>
          <td>2025-01-13</td>
          <td>Conference Expenses</td>
          <td>₹12,000</td>
          <td>Online</td>
        </tr>
        <tr>
          <td>14</td>
          <td>2025-01-14</td>
          <td>Courier Services</td>
          <td>₹300</td>
          <td>Cash</td>
        </tr>
        <tr>
          <td>15</td>
          <td>2025-01-15</td>
          <td>Advertising</td>
          <td>₹8,500</td>
          <td>Online</td>
        </tr>
        <tr>
          <td>16</td>
          <td>2025-01-16</td>
          <td>Medical Supplies</td>
          <td>₹2,800</td>
          <td>Card</td>
        </tr>
        <tr>
          <td>17</td>
          <td>2025-01-17</td>
          <td>Training Fees</td>
          <td>₹6,000</td>
          <td>Online</td>
        </tr>
        <tr>
          <td>18</td>
          <td>2025-01-18</td>
          <td>Parking Fees</td>
          <td>₹200</td>
          <td>Cash</td>
        </tr>
        <tr>
          <td>19</td>
          <td>2025-01-19</td>
          <td>Security Services</td>
          <td>₹4,800</td>
          <td>Card</td>
        </tr>
        <tr>
          <td>20</td>
          <td>2025-01-20</td>
          <td>Miscellaneous</td>
          <td>₹1,400</td>
          <td>Cash</td>
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

  <script src="assets/js/expense.js"></script>
</body>

</html>