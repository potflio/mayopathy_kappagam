<!DOCTYPE html>
<html lang="en">
<?php
require("class_hospital.php");
$obj = new Hospital();
$staff = $obj->full_display("staff");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Details</title>
    <?php include 'navbar.php'; ?>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center text-primary">Staff Details</h2>
        <div class="d-flex justify-content-between align-items-center mb-4">
            <!-- Do not remove it -->
            <!-- <h1></h1> -->
            <!-- Do not remove it -->
            <a href="staff_add_form.php" class="btn btn-primary">+ Add New</a>
        </div>
        <?php
        // Check if payment_success query parameter is present
        if (isset($_GET['staff_success']) && $_GET['staff_success'] == 'true') {
            echo '<div id="staffAlert" class="alert alert-success alert-dismissible fade-out show" role="alert">
                    <strong>Staff Added Successful!</strong> The staff was successfully added.
                </div>';
        }
        ?>
        <div class="row mb-4">
            <div class="col-md-4 col-12 mb-2 mb-md-0">
                <input type="text" id="search" class="form-control" placeholder="Search by name..." oninput="filterTable()">
            </div>
            <div class="col-md-4 col-12 text-md-end text-center">
                <button class="btn btn-danger me-2" onclick="downloadPDF()">Download PDF</button>
                <button class="btn btn-success" onclick="downloadExcel()">Download Excel</button>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-success">
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Sex</th>
                        <th scope="col">Profile</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($staff as $staff) {
                    ?>
                        <tr>
                            <td scope="row">1</td>
                            <td><?php echo $staff['Name']; ?></td>
                            <td><?php echo $staff['Age']; ?></td>
                            <td><?php echo $staff['Designation']; ?></td>
                            <td><?php echo $staff['Sex']; ?></td>
                            <td><a href="staff_profile.php?id='<?php echo $staff['id']; ?>'"><img src="https://via.placeholder.com/50" alt="Profile" class="rounded-circle"></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <script type="text/javascript">
        setTimeout(function() {
            window.location.href = "staff_details.php";
        }, 4000);
    </script>
</body>

</html>