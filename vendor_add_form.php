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

        <div class="row mb-3">
            <div class="col-md-3">
                <label for="vendorName" class="form-label">Vendor Name:</label>
                <input type="text" id="vendorName" name="Vendor_Name" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="mobileNo" class="form-label">Mobile Number:</label>
                <input type="number" id="mobileNo" name="mobileNo" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="billNo" class="form-label">Bill No:</label>
                <input type="text" id="billNo" name="Bill_No[]" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="billDate" class="form-label">Bill Date:</label>
                <input type="date" id="billDate" name="Bill_Date" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-3">
                <label for="machine" class="form-label">Machine:</label>
                <input type="text" id="machine" name="Machine[]" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="quantity" class="form-label">Quantity:</label>
                <input type="number" id="quantity" name="Quantity[]" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="price" class="form-label">Price:</label>
                <input type="number" id="price" name="Price[]" class="form-control">
            </div>
            <div class="col-md-3 d-flex align-items-end">
                <button type="button" class="btn btn-warning w-100" id="confirmBtn">ADD</button>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-mb-3">
                <label for="narrator" class="form-label">Narrator</label>
                <textarea class="form-control" id="narrator" rows="3"></textarea>
            </div>
        </div>
        <table class="table table-bordered text-center mt-4">
            <thead class="table-light">
                <tr>
                    <th>S.No</th>
                    <th>Bill No</th>
                    <th>Machine</th>
                    <th>Narrator</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody id="tableBody">
                <?php
                include "class_hospital.php";
                ?>
            </tbody>
            <tfoot>
                <tr>
                    
                    <td colspan="6" class="text-end fw-bold">Total:</td>
                    <td colspan="1" id="totalAmount">0</td>
                </tr>
            </tfoot>
        </table>

        <!-- <div class="mt-4">
                <label for="uploadImage" class="form-label">Upload Image:</label>
                <input type="file" id="uploadImage" name="Upload_Image[]" class="form-control mb-3">
            </div>-->

        <!-- Submit button inside the form -->
        <button type="button" class="btn btn-primary w-100" id="submitbtn">Submit</button>


    </div>

    <script src="assets/js/vendor.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // alert("working");
            //           //  $('#submitbtn').on('click', function () {
            // 			//	var Bill_No = $("#Bill_No").val();
            // 			//	var Machine = $("#Machine").val();
            // 			//	var Quantity = $("#Quantity").val();
            // 			//	var Price = $("#Price").val();
            // 			//	var data={Bill_No:Bill_No,Machine:Machine,Quantity:Quantity,Price:Price};
            // 			//	vendor.push(data);
            // 			//}
            $("#submitbtn").on('click', function(event) {

                event.preventDefault();
                var Bill_No = $("#billNo").val();
                var vendorName = $("#vendorName").val();
                var billDate = $("#billDate").val();
                var mobileNo = $("#mobileNo").val();
                alert(mobileNo);
                var tabledata = [];
                $("#tableBody tr").each(function() {
                    var row = $(this); // Get the current row

                    tabledata.push({

                        Machine: row.find('td:eq(2)').text(),
                        Quantity: row.find('td:eq(3)').text(),
                        Price: row.find('td:eq(4)').text(),
                        Total: row.find('td:eq(5)').text(),
                    }); //tabledata
                }); //each fn

                //     // Send data to the server via AJAX
                $.ajax({
                    url: "vendor_addform_ajax.php", // Your PHP handler
                    method: "GET",
                    data: {
                        data: tabledata,
                        Bill_No: Bill_No,
                        vendorName: vendorName,
                        billDate: billDate,
                        mobileNo: mobileNo
                    }, // Send the data as an array of objects
                    datatype: "json", // Expect a JSON response
                    success: function(response) {
                        if (response.success) {
                            // Show success message on the same page
                            alert('Data submitted successfully!');
                        } else {
                            alert('Error: ' + response.message); // Display error message from the response
                        }
                    },
                    error: function(xhr, status, error) {
                        alert('AJAX Error: ' + status + ' - ' + error); // Error callback
                    }
                }); //ajaxclose
            }); //click event
        }); //ready
    </script>
</body>

</html>