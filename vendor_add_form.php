<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Form</title>
    <?php include 'navbar.php'; ?>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center text-success mb-4">Vendor Form</h2>
        <form>
            <div class="row mb-3">
                <div class="col-md-3">
                    <label for="vendorName" class="form-label">Vendor Name:</label>
                    <input type="text" id="vendorName" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="billNo" class="form-label">Bill No:</label>
                    <input type="text" id="billNo" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="billDate" class="form-label">Bill Date:</label>
                    <input type="date" id="billDate" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3">
                    <label for="machine" class="form-label">Machine:</label>
                    <input type="text" id="machine" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="quantity" class="form-label">Quantity:</label>
                    <input type="number" id="quantity" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="price" class="form-label">Price:</label>
                    <input type="number" id="price" class="form-control">
                </div>
                <div class="col-md-3 d-flex align-items-end">
                    <button type="button" class="btn btn-warning w-100" id="confirmBtn">Confirm</button>
                </div>
            </div>
        </form>

        <table class="table table-bordered text-center mt-4">
            <thead class="table-light">
                <tr>
                    <th>S.No</th>
                    <th>Machine</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="tableBody">
                <!-- Dynamic rows will be added here -->
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="text-end fw-bold">Total:</td>
                    <td colspan="2" id="totalAmount">0</td>
                </tr>
            </tfoot>
        </table>

        <div class="mt-4">
            <label for="uploadImage" class="form-label">Upload Image:</label>
            <input type="file" id="uploadImage" class="form-control mb-3">
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </div>
    </div>

</body>
<script src="assets/js/vendor.js"></script>

</html>