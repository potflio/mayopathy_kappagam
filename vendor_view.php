<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Form Display</title>
   <?php include 'navbar.php'; ?>
</head>
<body>
<div class="container my-5">
    <!-- Header -->
    <h3 class="text-center text-success mb-4">Vendor View</h3>
    
    <!-- Details Section -->
    <div class="row mb-4">
        <div class="col-md-4">
            <h6><strong>Vendor Name:</strong></h6>
            <p>John Doe</p>
        </div>
        <div class="col-md-4">
            <h6><strong>Bill No:</strong></h6>
            <p>12345</p>
        </div>
        <div class="col-md-4">
            <h6><strong>Bill Date:</strong></h6>
            <p>2025-01-11</p>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-md-4">
            <h6><strong>Machine:</strong></h6>
            <p>CNC Lathe</p>
        </div>
        <div class="col-md-4">
            <h6><strong>Quantity:</strong></h6>
            <p>10</p>
        </div>
        <div class="col-md-4">
            <h6><strong>Price:</strong></h6>
            <p>500</p>
        </div>
    </div>
    
    <!-- Table Section -->
    <div class="mt-5">
        <table class="table table-bordered text-center">
            <thead class="table-light">
            <tr>
                <th>S.No</th>
                <th>Machine</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>CNC Lathe</td>
                <td>10</td>
                <td>500</td>
                <td>5000</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Drill Machine</td>
                <td>5</td>
                <td>200</td>
                <td>1000</td>
            </tr>
            <tr>
                <td colspan="4" class="text-end"><strong>Total:</strong></td>
                <td>6000</td>
            </tr>
            </tbody>
        </table>
    </div>
    
    <!-- Invoice Image Section -->
    <div class="mt-4">
        <h6><strong>Invoice Image:</strong></h6>
        <div class="border p-3 text-center">
            <img src="assets/demo_invoice.webp" alt="Invoice Image" class="img-fluid">
        </div>
    </div>
</div>
</body>
</html>
