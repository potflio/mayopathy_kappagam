<!DOCTYPE html>
<?php
require("class_hospital.php");
$obj = new Hospital();
$expense = $obj->full_display("expense");
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Expense Table</title>
  <?php include 'navbar.php'; ?>
</head>

<body>
  <?php
  // Check if payment_success query parameter is present
  if (isset($_GET['expense_success']) && $_GET['expense_success'] == 'true') {
    echo '<div id="ExpenseAlert" class="alert alert-success alert-dismissible fade-out show" role="alert">
                    <strong>Expense Added Successful!</strong> The Expense was successfully added.
                </div>';
  }
  ?>
  <div class="container mt-5">
    <h2 class="text-center text-primary mb-4">Expense</h2>
    <a href="expense_form.php" class="btn btn-primary">+ADD</a><br><br><br>

    <div class="row g-4 text-center">
      <div class="col-md-2 col-sm-6">
        <a class="btn btn-primary w-100 p-3" href="previous_month_balance.php">
          <i class="bi bi-wallet2"></i> Previous Month Balance
        </a>
      </div>
      <div class="col-md-2 col-sm-6">
        <a class="btn btn-success w-100 p-3" href="machine_income.php">
          <i class="bi bi-gear"></i> Machine Income
        </a>
      </div>
      <div class="col-md-2 col-sm-6">
        <a class="btn btn-info w-100 p-3" href="ip_op_income.php">
          <i class="bi bi-hospital"></i> IP And OP Income
        </a>
      </div>
      <div class="col-md-2 col-sm-6">
        <a class="btn btn-warning w-100 p-3" href="bank_deposit.php">
          <i class="bi bi-bank"></i> Bank Deposit
        </a>
      </div>
      <div class="col-md-2 col-sm-6">
        <a class="btn btn-secondary w-100 p-3" href="other_income.php">
          <i class="bi bi-cash"></i> Other Income
        </a>
      </div>
      <div class="col-md-2 col-sm-6">
        <a class="btn btn-danger w-100 p-3" href="main_expense.php">
          <i class="bi bi-currency-dollar"></i> Expenses
        </a>
      </div>
      <div class="col-md-2 col-sm-6">
        <a class="btn btn-primary w-100 p-3" href="md.php">
          <i class="bi bi-person-badge"></i> Sir Expenses
        </a>
      </div>
    </div>
    <hr>
    <div class="row mb-4">
      <div class="col-md-4 col-12 mb-2 mb-md-0">
        <input type="text" id="search" class="form-control" placeholder="Search by name..." oninput="filterTable()">
      </div>
      <div class="col-md-4 col-12 text-md-end text-center">
        <button class="btn btn-danger me-2" onclick="downloadPDF()">Download PDF</button>
        <button class="btn btn-success" onclick="downloadExcel()">Download Excel</button>
      </div>
    </div>
    <table id="Mytable" class="table table-bordered">
      <thead class="table-warning">
        <tr>
          <th scope="col">S.NO</th>
          <th scope="col">Date</th>
          <th scope="col">Expense Name</th>
          <th scope="col">Amount (₹)</th>
          <th scope="col">Pay Type</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($expense as $expense) {
        ?>
          <tr>
            <td><?php echo $expense['id']; ?></td>
            <td><?php echo $expense['Date']; ?></td>
            <td><?php echo $expense['Expense_Name']; ?></td>
            <td><?php echo $expense['Amount']; ?></td>
            <td><?php echo $expense['Pay_Type']; ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>


</body>

</html>