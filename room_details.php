<!DOCTYPE html>
<html lang="en">
<?php
require("class_hospital.php");
$obj = new Hospital();
$room = $obj->full_display("room");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'navbar.php'; ?>
</head>
<style>
    .room-card {
        padding: 10px;
        text-align: center;
        border-radius: 8px;
    }



    /* Adjust grid for mobile */
    @media (max-width: 767px) {
        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            /* Evenly distribute */
            gap: 5px;

        }

        .col-md-2 {
            flex: 0 0 calc(25% - 5px);
            /* Make 4 boxes per row */
            max-width: calc(25% - 5px);

        }

        .room-card {
            max-width: 100%;
            /* Adjust width */
            height: 150px;
            /* Reduce height for compact layout */
            font-size: 12px;
            /* Reduce text size */
            padding: 5px;
            /* Reduce padding */

        }

        .room-card .card-body {
            padding: 5px;
            font-size: 15px;
        }

        .room-card .btn {
            font-size: 10px;
            padding: 3px 6px;
            visibility: hidden;
            /* Smaller button */
        }
    }
</style>

<body>
    <div class="container">
        <h2 class="text-center mb-4">Hospital Room Structure</h2>
        <div class="row">
            <h3 class="text-info">Block - 1</h3>
            <div class="col-md-2">
                <a href="room_add_form.php" class="text-decoration-none">
                    <div class="card room-card ac-room available text-white bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Room 1 (AC)</h5>
                            <p class="card-text">Price: $100/day</p>
                            <p class="card-text"><strong>Status:</strong> Available</p>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">

                <a href="room_view.php" class="text-decoration-none">
                    <div class="card room-card non-ac-room occupied text-white bg-danger">
                        <div class="card-body">
                            <h5 class="card-title">Room 2 (AC)</h5>
                            <p class="card-text">Price: $50/day</p>
                            <p class="card-text"><strong>Status:</strong> Occupied</p>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">

                <a href="room_view.php" class="text-decoration-none">
                    <div class="card room-card ac-room occupied  text-white bg-danger">
                        <div class="card-body">
                            <h5 class="card-title">Room 3 (AC)</h5>
                            <p class="card-text">Price: $120/day</p>
                            <p class="card-text"><strong>Status:</strong> Occupied</p>

                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-2">

                <a href="room_view.php" class="text-decoration-none">
                    <div class="card room-card non-ac-room occupied  text-white bg-danger">
                        <div class="card-body">
                            <h5 class="card-title">Room 4 (AC)</h5>
                            <p class="card-text">Price: $50/day</p>
                            <p class="card-text"><strong>Status:</strong> Occupied</p>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">

                <a href="room_view.php" class="text-decoration-none">
                    <div class="card room-card ac-room occupied  text-white bg-danger">
                        <div class="card-body">
                            <h5 class="card-title">Room 5 (AC)</h5>
                            <p class="card-text">Price: $120/day</p>
                            <p class="card-text"><strong>Status:</strong> Occupied</p>

                        </div>
                    </div>
                </a>
            </div>
        </div><br>
        <div class="row">
            <h3 class="text-info">Block - 2</h3>
            <div class="col-md-2">
                <a href="room_add_form.php" class="text-decoration-none">
                    <div class="card room-card ac-room available text-white bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Room 1 (AC)</h5>
                            <p class="card-text">Price: $100/day</p>
                            <p class="card-text"><strong>Status:</strong> Available</p>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">

                <a href="room_add_form.php" class="text-decoration-none">
                    <div class="card room-card non-ac-room occupied text-white bg-danger">
                        <div class="card-body">
                            <h5 class="card-title">Non-AC Room</h5>
                            <p class="card-text">Price: $50/day</p>
                            <p class="card-text"><strong>Status:</strong> Occupied</p>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">

                <a href="room_add_form.php" class="text-decoration-none">
                    <div class="card room-card ac-room occupied text-white bg-danger">
                        <div class="card-body">
                            <h5 class="card-title">AC Room</h5>
                            <p class="card-text">Price: $120/day</p>
                            <p class="card-text"><strong>Status:</strong> Occupied</p>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">
                <a href="room_add_form.php" class="text-decoration-none">
                    <div class="card room-card ac-room available text-white bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">AC Room</h5>
                            <p class="card-text">Price: $100/day</p>
                            <p class="card-text"><strong>Status:</strong> Available</p>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">

                <a href="room_add_form.php" class="text-decoration-none">
                    <div class="card room-card non-ac-room occupied text-white bg-danger">
                        <div class="card-body">
                            <h5 class="card-title">Non-AC Room</h5>
                            <p class="card-text">Price: $50/day</p>
                            <p class="card-text"><strong>Status:</strong> Occupied</p>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">

                <a href="room_add_form.php" class="text-decoration-none">
                    <div class="card room-card ac-room occupied text-white bg-danger">
                        <div class="card-body">
                            <h5 class="card-title">AC Room</h5>
                            <p class="card-text">Price: $120/day</p>
                            <p class="card-text"><strong>Status:</strong> Occupied</p>

                        </div>
                    </div>
                </a>
            </div>
        </div>
        <br>
        <div class="row">
            <h3 class="text-info">Block - 3</h3>
            <div class="col-md-2">
                <a href="room_add_form.php" class="text-decoration-none">
                    <div class="card room-card ac-room available text-white bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Room 1 (AC)</h5>
                            <p class="card-text">Price: $100/day</p>
                            <p class="card-text"><strong>Status:</strong> Available</p>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">

                <a href="room_add_form.php" class="text-decoration-none">
                    <div class="card room-card non-ac-room occupied text-white bg-danger">
                        <div class="card-body">
                            <h5 class="card-title">Non-AC Room</h5>
                            <p class="card-text">Price: $50/day</p>
                            <p class="card-text"><strong>Status:</strong> Occupied</p>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">

                <a href="room_add_form.php" class="text-decoration-none">
                    <div class="card room-card ac-room occupied text-white bg-danger">
                        <div class="card-body">
                            <h5 class="card-title">AC Room</h5>
                            <p class="card-text">Price: $120/day</p>
                            <p class="card-text"><strong>Status:</strong> Occupied</p>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">
                <a href="room_add_form.php" class="text-decoration-none">
                    <div class="card room-card ac-room available text-white bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">AC Room</h5>
                            <p class="card-text">Price: $100/day</p>
                            <p class="card-text"><strong>Status:</strong> Available</p>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">

                <a href="room_add_form.php" class="text-decoration-none">
                    <div class="card room-card non-ac-room occupied text-white bg-danger">
                        <div class="card-body">
                            <h5 class="card-title">Non-AC Room</h5>
                            <p class="card-text">Price: $50/day</p>
                            <p class="card-text"><strong>Status:</strong> Occupied</p>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">

                <a href="room_add_form.php" class="text-decoration-none">
                    <div class="card room-card ac-room occupied text-white bg-danger">
                        <div class="card-body">
                            <h5 class="card-title">AC Room</h5>
                            <p class="card-text">Price: $120/day</p>
                            <p class="card-text"><strong>Status:</strong> Occupied</p>

                        </div>
                    </div>
                </a>
            </div>
        </div><br>
        <div class="row">
            <h3 class="text-info">Block - 4</h3>
            <div class="col-md-2">
                <a href="room_add_form.php" class="text-decoration-none">
                    <div class="card room-card ac-room available text-white bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Room 1 (AC)</h5>
                            <p class="card-text">Price: $100/day</p>
                            <p class="card-text"><strong>Status:</strong> Available</p>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">

                <a href="room_add_form.php" class="text-decoration-none">
                    <div class="card room-card non-ac-room occupied text-white bg-danger">
                        <div class="card-body">
                            <h5 class="card-title">Non-AC Room</h5>
                            <p class="card-text">Price: $50/day</p>
                            <p class="card-text"><strong>Status:</strong> Occupied</p>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">

                <a href="room_add_form.php" class="text-decoration-none">
                    <div class="card room-card ac-room occupied text-white bg-danger">
                        <div class="card-body">
                            <h5 class="card-title">AC Room</h5>
                            <p class="card-text">Price: $120/day</p>
                            <p class="card-text"><strong>Status:</strong> Occupied</p>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">
                <a href="room_add_form.php" class="text-decoration-none">
                    <div class="card room-card ac-room available text-white bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">AC Room</h5>
                            <p class="card-text">Price: $100/day</p>
                            <p class="card-text"><strong>Status:</strong> Available</p>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">

                <a href="room_add_form.php" class="text-decoration-none">
                    <div class="card room-card non-ac-room occupied text-white bg-danger">
                        <div class="card-body">
                            <h5 class="card-title">Non-AC Room</h5>
                            <p class="card-text">Price: $50/day</p>
                            <p class="card-text"><strong>Status:</strong> Occupied</p>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">

                <a href="room_add_form.php" class="text-decoration-none">
                    <div class="card room-card ac-room occupied text-white bg-danger">
                        <div class="card-body">
                            <h5 class="card-title">AC Room</h5>
                            <p class="card-text">Price: $120/day</p>
                            <p class="card-text"><strong>Status:</strong> Occupied</p>

                        </div>
                    </div>
                </a>
            </div>
        </div>
        <h2 class="text-center text-success mt-4">Room Details</h2>
        <?php
        // Check if payment_success query parameter is present
        if (isset($_GET['payment_success']) && $_GET['payment_success'] == 'true') {
            echo '<div id="paymentAlert" class="alert alert-success alert-dismissible fade-out show" role="alert">
                    <strong>Payment Successful!</strong> The payment was successfully processed.
                </div>';
        }
        ?>
        <?php
        // Check if payment_success query parameter is present
        if (isset($_GET['patient_success']) && $_GET['patient_success'] == 'true') {
            echo '<div id="patientAlert" class="alert alert-success alert-dismissible fade-out show" role="alert">
                    <strong>Room Added Successful!</strong> The patient was successfully added.
                </div>';
        }
        ?>
        <div class="text-end mb-3">
            <a href="room_add_form.php" class="btn btn-primary">+ADD NEW</a>
        </div>
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
            <table id="myTable" class="table table-striped table-hover align-middle text-center">
                <thead class="table-success">
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Room No</th>
                        <th scope="col">Person Name</th>
                        <th scope="col">Open Date</th>
                        <th scope="col">Discharge Date</th>
                        <th scope="col">Room Type</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Pay</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $c = 1;
                    foreach ($room as $room) {
                    ?>
                        <tr>
                            <td><?php echo $c++; ?></td>
                            <td><?php echo $room['Room_No']; ?></td>
                            <td><?php echo $room['Person_Name']; ?></td>
                            <td><?php echo $room['Open_Date']; ?></td>
                            <td><?php echo $room['Discharge_Date']; ?></td>
                            <td><?php echo $room['Room_Type']; ?></td>
                            <td><?php echo $room['Amount']; ?></td>
                            <td><a href="room_payment_voucher.php?Person_Name='<?php echo $room['Person_Name']; ?>'">
                                    <img class="img-fluid rounded-circle" style="max-width: 50px;" src="assets/icons/patient_payment.png" alt="Payment"></a>
                            </td>
                            <td><button type="submit" style="background-color:pink" id="button">Discharge</button></td>
                        </tr>
                    <?php } ?>
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
<script src="assets/js/room_details.js"></script>

</html>